<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * Telegram Notification Service
 * 
 * Handles sending notifications to Telegram via Bot API
 * All sensitive data (bot token, chat ID) are loaded from environment variables
 */
class TelegramNotificationService
{
    /**
     * Telegram Bot API base URL
     */
    private const API_BASE_URL = 'https://api.telegram.org/bot';

    /**
     * Bot token from environment
     */
    private string $botToken;

    /**
     * Chat ID from environment
     */
    private string $chatId;

    /**
     * Initialize service with environment variables
     */
    public function __construct()
    {
        $this->botToken = config('services.telegram.bot_token', '');
        $this->chatId = config('services.telegram.chat_id', '');
    }

    /**
     * Send a notification message to Telegram
     *
     * @param string $message Message content (supports HTML formatting)
     * @param string $parseMode Parse mode (default: HTML)
     * @return bool Success status
     */
    public function sendMessage(string $message, string $parseMode = 'HTML'): bool
    {
        // Validate configuration
        if (empty($this->botToken) || empty($this->chatId)) {
            Log::warning('Telegram notification skipped: Missing bot token or chat ID in configuration');
            return false;
        }

        try {
            $response = Http::timeout(10)->post($this->getApiUrl('sendMessage'), [
                'chat_id' => $this->chatId,
                'text' => $message,
                'parse_mode' => $parseMode,
                'disable_web_page_preview' => true,
            ]);

            if ($response->successful()) {
                Log::info('Telegram notification sent successfully');
                return true;
            }

            Log::error('Telegram notification failed', [
                'status' => $response->status(),
                'response' => $response->body(),
            ]);

            return false;
        } catch (\Exception $e) {
            Log::error('Telegram notification exception', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return false;
        }
    }

    /**
     * Send new lead notification
     *
     * @param array $leadData Lead information
     * @return bool Success status
     */
    public function sendNewLeadNotification(array $leadData): bool
    {
        $message = $this->formatLeadMessage($leadData);
        return $this->sendMessage($message);
    }

    /**
     * Send contact form notification
     *
     * @param array $contactData Contact form data
     * @return bool Success status
     */
    public function sendContactFormNotification(array $contactData): bool
    {
        $message = $this->formatContactMessage($contactData);
        return $this->sendMessage($message);
    }

    /**
     * Send booking notification
     *
     * @param array $bookingData Booking information
     * @return bool Success status
     */
    public function sendBookingNotification(array $bookingData): bool
    {
        $message = $this->formatBookingMessage($bookingData);
        return $this->sendMessage($message);
    }

    /**
     * Format lead data into Telegram message
     *
     * @param array $data Lead data
     * @return string Formatted message
     */
    private function formatLeadMessage(array $data): string
    {
        $timestamp = now()->format('d/m/Y H:i:s');
        
        return "🔔 <b>NEW LEAD FROM VIREXA WEBSITE</b>\n\n" .
               "👤 <b>Name:</b> " . htmlspecialchars($data['name'] ?? 'N/A') . "\n" .
               "📧 <b>Email:</b> " . htmlspecialchars($data['email'] ?? 'N/A') . "\n" .
               "📱 <b>Phone:</b> " . htmlspecialchars($data['phone'] ?? 'N/A') . "\n" .
               "🏢 <b>Department:</b> " . htmlspecialchars($data['department'] ?? 'N/A') . "\n\n" .
               "💬 <b>Status:</b> Waiting for CS response\n" .
               "⏰ <b>Time:</b> {$timestamp}\n\n" .
               "---\n" .
               "Please follow up this lead immediately! 🚀";
    }

    /**
     * Format contact form data into Telegram message
     *
     * @param array $data Contact form data
     * @return string Formatted message
     */
    private function formatContactMessage(array $data): string
    {
        $timestamp = now()->format('d/m/Y H:i:s');
        
        $message = "📬 <b>NEW CONTACT FORM SUBMISSION</b>\n\n" .
                   "👤 <b>Name:</b> " . htmlspecialchars($data['name'] ?? 'N/A') . "\n" .
                   "📧 <b>Email:</b> " . htmlspecialchars($data['email'] ?? 'N/A') . "\n";

        if (!empty($data['phone'])) {
            $message .= "📱 <b>Phone:</b> " . htmlspecialchars($data['phone']) . "\n";
        }

        if (!empty($data['subject'])) {
            $message .= "📋 <b>Subject:</b> " . htmlspecialchars($data['subject']) . "\n";
        }

        if (!empty($data['message'])) {
            $message .= "\n💬 <b>Message:</b>\n" . htmlspecialchars($data['message']) . "\n";
        }

        $message .= "\n⏰ <b>Time:</b> {$timestamp}";

        return $message;
    }

    /**
     * Format booking data into Telegram message
     *
     * @param array $data Booking data
     * @return string Formatted message
     */
    private function formatBookingMessage(array $data): string
    {
        $timestamp = now()->format('d/m/Y H:i:s');
        
        $message = "📅 <b>NEW BOOKING REQUEST</b>\n\n" .
                   "👤 <b>Name:</b> " . htmlspecialchars($data['name'] ?? 'N/A') . "\n" .
                   "📧 <b>Email:</b> " . htmlspecialchars($data['email'] ?? 'N/A') . "\n" .
                   "📱 <b>Phone:</b> " . htmlspecialchars($data['phone'] ?? 'N/A') . "\n";

        if (!empty($data['service'])) {
            $message .= "🎯 <b>Service:</b> " . htmlspecialchars($data['service']) . "\n";
        }

        if (!empty($data['date'])) {
            $message .= "📆 <b>Preferred Date:</b> " . htmlspecialchars($data['date']) . "\n";
        }

        if (!empty($data['notes'])) {
            $message .= "\n📝 <b>Notes:</b>\n" . htmlspecialchars($data['notes']) . "\n";
        }

        $message .= "\n⏰ <b>Submitted:</b> {$timestamp}\n\n" .
                    "---\n" .
                    "Please confirm this booking! ✅";

        return $message;
    }

    /**
     * Get full API URL for a method
     *
     * @param string $method API method name
     * @return string Full API URL
     */
    private function getApiUrl(string $method): string
    {
        return self::API_BASE_URL . $this->botToken . '/' . $method;
    }

    /**
     * Test the Telegram bot connection
     *
     * @return bool Success status
     */
    public function testConnection(): bool
    {
        if (empty($this->botToken) || empty($this->chatId)) {
            Log::warning('Telegram test skipped: Missing configuration');
            return false;
        }

        try {
            $response = Http::timeout(10)->get($this->getApiUrl('getMe'));

            if ($response->successful()) {
                Log::info('Telegram bot connection test successful', [
                    'bot_info' => $response->json(),
                ]);
                return true;
            }

            Log::error('Telegram bot connection test failed', [
                'status' => $response->status(),
                'response' => $response->body(),
            ]);

            return false;
        } catch (\Exception $e) {
            Log::error('Telegram bot connection test exception', [
                'error' => $e->getMessage(),
            ]);

            return false;
        }
    }
}
