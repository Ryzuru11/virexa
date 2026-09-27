<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\PortfolioController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ChatController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ChatController as AdminChatController;

// Frontend Routes
Route::namespace('App\Http\Controllers\Frontend')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/services', [ServicesController::class, 'index'])->name('services');
    Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
    Route::get('/portfolio/ecommerce', [PortfolioController::class, 'ecommerce'])->name('portfolio.ecommerce');
    Route::get('/portfolio/web-portfolio', [PortfolioController::class, 'webPortfolio'])->name('portfolio.web-portfolio');
    Route::get('/portfolio/mobile-app', [PortfolioController::class, 'mobileApp'])->name('portfolio.mobile-app');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    
    // Chat & Lead Submission Routes (with rate limiting)
    Route::middleware('throttle:10,1')->group(function () {
        Route::post('/api/chat/submit-lead', [ChatController::class, 'submitLead'])->name('chat.submit-lead');
        Route::post('/api/contact/submit', [ChatController::class, 'submitContact'])->name('contact.submit');
        Route::post('/api/booking/submit', [ChatController::class, 'submitBooking'])->name('booking.submit');
    });
});

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    
    Route::middleware('admin.auth')->group(function () {
        Route::get('/chat', [AdminChatController::class, 'index'])->name('admin.chat');
        Route::get('/api/chat/conversation/{id}', [AdminChatController::class, 'getConversation'])->name('admin.chat.conversation');
        Route::post('/api/chat/reply', [AdminChatController::class, 'reply'])->name('admin.chat.reply');
        Route::delete('/api/chat/conversation/{id}', [AdminChatController::class, 'destroy'])->name('admin.chat.destroy');
    });
});

// Public API for chat widget polling
Route::get('/api/chat/messages/{conversationId}', [ChatController::class, 'getMessages'])->name('chat.messages');
Route::post('/api/chat/send-message', [ChatController::class, 'sendMessage'])->name('chat.send-message');
