# Telegram Chatbot Notification System

## Overview

This system sends real-time notifications to Telegram when specific events occur on the VIREXA website, such as:
- New lead submissions from chat widget
- Contact form submissions
- Booking requests

## Security Features

✅ **No hardcoded credentials** - All sensitive data loaded from environment variables  
✅ **Server-side only** - No API tokens exposed to frontend  
✅ **Error handling** - Graceful failure without breaking main application flow  
✅ **Validation** - All inputs validated before processing  
✅ **Logging** - All errors and successes logged for monitoring  

## Setup Instructions

### 1. Create Telegram Bot

1. Open Telegram and search for `@BotFather`
2. Send `/newbot` command
3. Follow instructions to create your bot
4. Copy the **Bot Token** (format: `123456789:ABCdefGHIjklMNOpqrsTUVwxyz`)

### 2. Get Chat ID

**Option A: Using IDBot**
1. Search for `@myidbot` in Telegram
2. Send `/getid` command
3. Copy your Chat ID

**Option B: Using your bot**
1. Send any message to your bot
2. Visit: `https://api.telegram.org/bot<YOUR_BOT_TOKEN>/getUpdates`
3. Find `"chat":{"id":123456789}` in the response
4. Copy the Chat ID

### 3. Configure Environment Variables

Add to your `.env` file:

```env
TELEGRAM_BOT_TOKEN=123456789:ABCdefGHIjklMNOpqrsTUVwxyz
TELEGRAM_CHAT_ID=123456789
```

**Important:** Never commit these values to version control!

### 4. Test Connection

Run the test command:

```bash
php artisan telegram:test
```

Expected output:
```
Testing Telegram bot connection...
✅ Successfully connected to Telegram bot
Sending test message...
✅ Test message sent successfully
Check your Telegram chat to confirm receipt
```

## Usage

### Automatic Notifications

The system automatically sends notifications when:

1. **Chat Widget Lead Submission**
   - Triggered when user submits chat form
   - Endpoint: `POST /api/chat/submit-lead`
   - Notification includes: name, email, phone, department

2. **Contact Form Submission**
   - Triggered when user submits contact form
   - Endpoint: `POST /api/contact/submit`
   - Notification includes: name, email, phone, subject, message

3. **Booking Request**
   - Triggered when user submits booking form
   - Endpoint: `POST /api/booking/submit`
   - Notification includes: name, email, phone, service, date, notes

### Manual Notifications

You can send custom notifications programmatically:

```php
use App\Services\TelegramNotificationService;

// Inject service
$telegram = app(TelegramNotificationService::class);

// Send custom message
$telegram->sendMessage("🔔 <b>Custom Notification</b>\n\nYour message here");

// Send lead notification
$telegram->sendNewLeadNotification([
    'name' => 'John Doe',
    'email' => 'john@example.com',
    'phone' => '+62812345678',
    'department' => 'Sales'
]);
```

## API Endpoints

### Submit Lead (Chat Widget)

```http
POST /api/chat/submit-lead
Content-Type: application/json

{
  "department": "Sales",
  "name": "John Doe",
  "email": "john@example.com",
  "phone": "+62812345678"
}
```

### Submit Contact Form

```http
POST /api/contact/submit
Content-Type: application/json

{
  "name": "John Doe",
  "email": "john@example.com",
  "phone": "+62812345678",
  "subject": "Inquiry",
  "message": "I would like to know more about your services"
}
```

### Submit Booking

```http
POST /api/booking/submit
Content-Type: application/json

{
  "name": "John Doe",
  "email": "john@example.com",
  "phone": "+62812345678",
  "service": "Web Development",
  "date": "2025-02-15",
  "notes": "Prefer morning consultation"
}
```

## Message Format

All notifications use HTML formatting for better readability:

```
🔔 NEW LEAD FROM VIREXA WEBSITE

👤 Name: John Doe
📧 Email: john@example.com
📱 Phone: +62812345678
🏢 Department: Sales

💬 Status: Waiting for CS response
⏰ Time: 06/02/2025 14:30:00

---
Please follow up this lead immediately! 🚀
```

## Error Handling

The system is designed to fail gracefully:

- ❌ **Missing configuration**: Logs warning, returns false, continues execution
- ❌ **API timeout**: Logs error, returns false, continues execution
- ❌ **Invalid response**: Logs error with details, returns false, continues execution
- ❌ **Network error**: Logs exception, returns false, continues execution

**Important:** Notification failures never break the main application flow. Users can still submit forms even if Telegram is down.

## Monitoring

All Telegram activities are logged:

```bash
# View logs
tail -f storage/logs/laravel.log | grep Telegram
```

Log entries include:
- ✅ Successful notifications
- ❌ Failed notifications with error details
- ⚠️ Configuration warnings
- 🔍 Connection test results

## Troubleshooting

### Bot not receiving messages

1. **Check environment variables**
   ```bash
   php artisan config:clear
   php artisan telegram:test
   ```

2. **Verify bot token**
   - Visit: `https://api.telegram.org/bot<YOUR_TOKEN>/getMe`
   - Should return bot information

3. **Verify chat ID**
   - Send message to bot
   - Visit: `https://api.telegram.org/bot<YOUR_TOKEN>/getUpdates`
   - Check if chat ID matches

### Messages not formatted correctly

- Ensure `parse_mode` is set to `HTML`
- Escape special HTML characters: `<`, `>`, `&`
- Use `htmlspecialchars()` for user input

### Timeout errors

- Default timeout is 10 seconds
- Check network connectivity
- Verify Telegram API is accessible

## Production Checklist

- [ ] Environment variables configured in production `.env`
- [ ] Bot token kept secret (not in version control)
- [ ] Test command executed successfully
- [ ] Error logging configured
- [ ] Monitoring alerts set up for failed notifications
- [ ] Backup notification method configured (email, SMS)

## Files Structure

```
app/
├── Services/
│   └── TelegramNotificationService.php    # Main service class
├── Http/Controllers/Frontend/
│   └── ChatController.php                 # API endpoints
└── Console/Commands/
    └── TestTelegramConnection.php         # Test command

config/
└── services.php                           # Telegram config

routes/
└── web.php                                # API routes

resources/views/frontend/layouts/
└── master.blade.php                       # Chat widget integration
```

## Support

For issues or questions:
- Check logs: `storage/logs/laravel.log`
- Run test: `php artisan telegram:test`
- Verify config: `php artisan config:show services.telegram`

## License

This integration is part of the VIREXA Digital website project.
