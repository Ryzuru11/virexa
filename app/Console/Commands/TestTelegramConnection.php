<?php

namespace App\Console\Commands;

use App\Services\TelegramNotificationService;
use Illuminate\Console\Command;

/**
 * Test Telegram Bot Connection Command
 * 
 * Usage: php artisan telegram:test
 */
class TestTelegramConnection extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'telegram:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test Telegram bot connection and send a test message';

    /**
     * Execute the console command.
     */
    public function handle(TelegramNotificationService $telegramService): int
    {
        $this->info('Testing Telegram bot connection...');

        // Test connection
        if (!$telegramService->testConnection()) {
            $this->error('❌ Failed to connect to Telegram bot');
            $this->warn('Please check your TELEGRAM_BOT_TOKEN in .env file');
            return Command::FAILURE;
        }

        $this->info('✅ Successfully connected to Telegram bot');

        // Send test message
        $this->info('Sending test message...');

        $testMessage = "🧪 <b>TEST MESSAGE FROM VIREXA</b>\n\n" .
                      "This is a test notification from your website.\n\n" .
                      "✅ Telegram integration is working correctly!\n" .
                      "⏰ Time: " . now()->format('d/m/Y H:i:s');

        if ($telegramService->sendMessage($testMessage)) {
            $this->info('✅ Test message sent successfully');
            $this->info('Check your Telegram chat to confirm receipt');
            return Command::SUCCESS;
        }

        $this->error('❌ Failed to send test message');
        $this->warn('Please check your TELEGRAM_CHAT_ID in .env file');
        return Command::FAILURE;
    }
}
