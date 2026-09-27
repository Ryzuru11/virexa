<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conversation;
use App\Models\Message;

class ChatController extends Controller
{
    public function index()
    {
        $conversations = Conversation::with(['messages' => function($query) {
            $query->latest()->limit(1);
        }])->latest()->get();
        
        return view('admin.chat', compact('conversations'));
    }
    
    public function getConversation($id)
    {
        $conversation = Conversation::with('messages')->findOrFail($id);
        
        return response()->json([
            'conversation' => $conversation,
            'messages' => $conversation->messages,
        ]);
    }
    
    public function reply(Request $request)
    {
        $request->validate([
            'conversation_id' => 'required|exists:conversations,id',
            'message' => 'required|string|max:1000',
        ]);
        
        $conversation = Conversation::findOrFail($request->conversation_id);
        
        $message = Message::create([
            'conversation_id' => $conversation->id,
            'sender_type' => 'admin',
            'message' => $request->message,
        ]);
        
        return response()->json([
            'success' => true,
            'message' => $message,
        ]);
    }

    public function destroy($id)
    {
        $conversation = Conversation::findOrFail($id);

        // Hapus semua pesan terkait lalu hapus conversation
        $conversation->messages()->delete();
        $conversation->delete();

        return response()->json([
            'success' => true,
            'message' => 'Conversation berhasil dihapus.',
        ]);
    }
}
