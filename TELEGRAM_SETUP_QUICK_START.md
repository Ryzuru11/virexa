# Telegram Bot - Quick Start Guide

## 🚀 5-Minute Setup

### Step 1: Create Your Bot (2 minutes)

1. Open Telegram app
2. Search for `@BotFather`
3. Send: `/newbot`
4. Choose a name: `VIREXA Notification Bot`
5. Choose a username: `virexa_notify_bot` (must end with 'bot')
6. **Copy the token** (looks like: `123456789:ABCdefGHIjklMNOpqrsTUVwxyz`)

### Step 2: Get Your Chat ID (1 minute)

**Method 1 - Using IDBot (Easiest)**
1. Search for `@myidbot` in Telegram
2. Click "Start"
3. Send: `/getid`
4. **Copy your Chat ID** (a number like: `123456789`)

**Method 2 - Manual**
1. Send any message to your new bot
2. Open browser and visit:
   ```
   https://api.telegram.org/bot<YOUR_BOT_TOKEN>/getUpdates
   ```
3. Find `"chat":{"id":123456789}`
4. **Copy the Chat ID**

### Step 3: Configure Environment (1 minute)

1. Open your `.env` file
2. Add these lines at the end:

```env
# Telegram Bot Configuration
TELEGRAM_BOT_TOKEN=123456789:ABCdefGHIjklMNOpqrsTUVwxyz
TELEGRAM_CHAT_ID=123456789
```

3. Replace with your actual token and chat ID
4. Save the file

### Step 4: Test Connection (1 minute)

Run this command:

```bash
php artisan config:clear
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

### Step 5: Verify (30 seconds)

1. Check your Telegram
2. You should see a test message from your bot
3. ✅ Done! Your bot is ready

## 🎯 What Happens Now?

Your website will automatically send Telegram notifications when:

- ✅ Someone submits the chat widget form
- ✅ Someone submits a contact form
- ✅ Someone makes a booking request

## 📱 Example Notification

When a user submits the chat form, you'll receive:

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

## 🔧 Troubleshooting

### "Failed to connect to Telegram bot"

1. Check your bot token is correct
2. Make sure there are no extra spaces
3. Run: `php artisan config:clear`

### "Failed to send test message"

1. Check your chat ID is correct
2. Make sure you've started a conversation with your bot
3. Send any message to your bot first

### Still not working?

1. Clear config cache:
   ```bash
   php artisan config:clear
   php artisan cache:clear
   ```

2. Check logs:
   ```bash
   tail -f storage/logs/laravel.log
   ```

3. Verify environment variables are loaded:
   ```bash
   php artisan tinker
   >>> config('services.telegram.bot_token')
   >>> config('services.telegram.chat_id')
   ```

## 🔒 Security Notes

- ✅ Never commit `.env` file to Git
- ✅ Keep your bot token secret
- ✅ Don't share your chat ID publicly
- ✅ Use environment variables only

## 📚 Need More Help?

See full documentation: `TELEGRAM_INTEGRATION.md`

## ✨ That's It!

Your Telegram notification system is now live and ready to receive notifications from your website!
