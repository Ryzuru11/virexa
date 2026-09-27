<?php

namespace App\Http\Controllers\Frontend;

use App\Services\TelegramNotificationService;
use App\Http\Requests\SubmitLeadRequest;
use App\Http\Requests\SubmitContactRequest;
use App\Http\Requests\SubmitBookingRequest;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

/**
 * ChatController handles chat widget interactions and lead submissions
 * 
 * This controller processes chat form submissions and sends notifications
 * to Telegram for immediate follow-up by the customer service team.
 * 
 * NOTE: Telegram configuration (bot token, chat ID) is managed via .env
 * and should NOT be modified in this controller.
 */
class ChatController extends BaseController
{
    /**
     * Telegram notification service
     */
    private TelegramNotificationService $telegramService;

    /**
     * Initialize controller with dependencies
     */
    public function __construct(TelegramNotificationService $telegramService)
    {
        parent::__construct();
        $this->telegramService = $telegramService;
    }

    /**
     * Handle chat form submission
     *
     * @param SubmitLeadRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submitLead(SubmitLeadRequest $request)
    {
        $leadData = $request->validated();

        // Selalu update data user jika email sudah ada — fix masalah nama berbeda
        $conversation = Conversation::updateOrCreate(
            ['user_email' => $leadData['email']],
            [
                'user_name'  => $leadData['name'],
                'user_phone' => $leadData['phone'],
                'department' => $leadData['department'],
            ]
        );

        // Ambil ID pesan terakhir — untuk polling frontend dimulai dari sini
        $lastMessage = $conversation->messages()->latest()->first();
        $lastMessageId = $lastMessage ? $lastMessage->id : 0;

        // Catat lead baru sebagai pesan sistem
        Message::create([
            'conversation_id' => $conversation->id,
            'sender_type'     => 'user',
            'message'         => "Percakapan baru dari {$leadData['name']}\nTopik: {$leadData['department']}\nHP: {$leadData['phone']}\nEmail: {$leadData['email']}",
        ]);

        // Send Telegram notification (non-blocking)
        $notificationSent = false;
        try {
            $notificationSent = $this->telegramService->sendNewLeadNotification($leadData);
            if (!$notificationSent) {
                Log::warning('Telegram notification was not sent for lead', [
                    'lead_data' => $leadData,
                    'reason'    => 'Service returned false',
                ]);
            }
        } catch (\Exception $e) {
            Log::error('Exception while sending Telegram notification for lead', [
                'error'     => $e->getMessage(),
                'lead_data' => $leadData,
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Terima kasih! Data Anda telah kami terima. Tim kami akan segera menghubungi Anda.',
            'data'    => [
                'name'              => $leadData['name'],
                'department'        => $leadData['department'],
                'notification_sent' => $notificationSent,
                'conversation_id'   => $conversation->id,
                'last_message_id'   => $lastMessageId,
            ],
        ], 200);
    }

    /**
     * Get messages for a conversation (for polling)
     *
     * @param int $conversationId
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMessages($conversationId)
    {
        $conversation = Conversation::with('messages')->find($conversationId);
        
        if (!$conversation) {
            return response()->json([
                'success' => false,
                'message' => 'Conversation not found',
            ], 404);
        }
        
        return response()->json([
            'success' => true,
            'messages' => $conversation->messages,
        ]);
    }

    /**
     * Send a message from user in chat widget
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendMessage(Request $request)
    {
        $request->validate([
            'conversation_id' => 'required|exists:conversations,id',
            'message' => 'required|string|max:1000',
        ]);

        $message = Message::create([
            'conversation_id' => $request->conversation_id,
            'sender_type' => 'user',
            'message' => $request->message,
        ]);

        // Kirim notifikasi Telegram ke admin setiap ada pesan baru dari user
        try {
            $conversation = \App\Models\Conversation::find($request->conversation_id);
            if ($conversation) {
                $timestamp = now()->format('d/m/Y H:i:s');
                $notifMessage =
                    "💬 <b>PESAN BARU — VIREXA CHAT</b>\n\n" .
                    "👤 <b>Dari:</b> " . htmlspecialchars($conversation->user_name ?? 'Unknown') . "\n" .
                    "📱 <b>Topik:</b> " . htmlspecialchars($conversation->department ?? '-') . "\n" .
                    "📧 <b>Email:</b> " . htmlspecialchars($conversation->user_email ?? '-') . "\n\n" .
                    "✉️ <b>Pesan:</b>\n" . htmlspecialchars($request->message) . "\n\n" .
                    "⏰ <b>Waktu:</b> {$timestamp}\n" .
                    "🔗 <b>Balas di:</b> /admin/chat";

                $this->telegramService->sendMessage($notifMessage);
            }
        } catch (\Exception $e) {
            Log::error('Telegram notif gagal saat kirim pesan', [
                'error' => $e->getMessage(),
                'conversation_id' => $request->conversation_id,
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => $message,
        ]);
    }

    /**
     * Handle contact form submission
     *
     * @param SubmitContactRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submitContact(SubmitContactRequest $request)
    {
        $contactData = $request->validated();

        // Create or find conversation
        $conversation = Conversation::firstOrCreate(
            ['user_email' => $contactData['email']],
            [
                'user_name' => $contactData['name'],
                'user_phone' => $contactData['phone'],
                'department' => 'Contact Form',
            ]
        );

        // Save message to database
        $message = Message::create([
            'conversation_id' => $conversation->id,
            'sender_type' => 'user',
            'message' => $contactData['message'],
        ]);

        // Send Telegram notification (non-blocking - won't fail user request)
        $notificationSent = false;
        try {
            $notificationSent = $this->telegramService->sendContactFormNotification($contactData);
            
            if (!$notificationSent) {
                Log::warning('Telegram notification was not sent for contact form', [
                    'contact_data' => $contactData,
                    'reason' => 'Service returned false',
                ]);
            }
        } catch (\Exception $e) {
            // Log error but don't fail the request
            Log::error('Exception while sending Telegram notification for contact', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'contact_data' => $contactData,
            ]);
        }

        // Return success response with user-friendly message
        return response()->json([
            'success' => true,
            'message' => 'Terima kasih! Pesan Anda telah kami terima. Kami akan merespons dalam waktu 1x24 jam.',
            'data' => [
                'notification_sent' => $notificationSent,
            ],
        ], 200);
    }

    /**
     * Handle booking form submission
     *
     * @param SubmitBookingRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submitBooking(SubmitBookingRequest $request)
    {
        $bookingData = $request->validated();

        // Create or find conversation
        $conversation = Conversation::firstOrCreate(
            ['user_email' => $bookingData['email']],
            [
                'user_name' => $bookingData['name'],
                'user_phone' => $bookingData['phone'],
                'department' => 'Booking',
            ]
        );

        // Save message to database
        $message = Message::create([
            'conversation_id' => $conversation->id,
            'sender_type' => 'user',
            'message' => "Booking request\nService: {$bookingData['service']}\nDate: " . ($bookingData['date'] ?? 'Not specified'),
        ]);

        // Send Telegram notification (non-blocking - won't fail user request)
        $notificationSent = false;
        try {
            $notificationSent = $this->telegramService->sendBookingNotification($bookingData);
            
            if (!$notificationSent) {
                Log::warning('Telegram notification was not sent for booking', [
                    'booking_data' => $bookingData,
                    'reason' => 'Service returned false',
                ]);
            }
        } catch (\Exception $e) {
            // Log error but don't fail the request
            Log::error('Exception while sending Telegram notification for booking', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'booking_data' => $bookingData,
            ]);
        }

        // Return success response with user-friendly message
        return response()->json([
            'success' => true,
            'message' => 'Terima kasih! Permintaan booking Anda telah kami terima. Tim kami akan menghubungi Anda untuk konfirmasi.',
            'data' => [
                'service' => $bookingData['service'],
                'date' => $bookingData['date'] ?? null,
                'notification_sent' => $notificationSent,
            ],
        ], 200);
    }
}
