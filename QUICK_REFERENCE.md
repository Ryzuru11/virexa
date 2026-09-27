# 🚀 Quick Reference - Telegram Integration

## 📋 API Endpoints

### 1. Submit Lead (Chat Widget)
```http
POST /api/chat/submit-lead
Content-Type: application/json

{
  "department": "Sales",      // Required: Sales|Support|Billing
  "name": "John Doe",          // Required: min 3 chars
  "email": "john@example.com", // Required: valid email
  "phone": "08123456789"       // Required: Indonesian format
}
```

**Success Response (200):**
```json
{
  "success": true,
  "message": "Terima kasih! Data Anda telah kami terima...",
  "data": {
    "name": "John Doe",
    "department": "Sales",
    "notification_sent": true
  }
}
```

**Error Response (422):**
```json
{
  "success": false,
  "message": "Data yang Anda masukkan tidak valid...",
  "errors": {
    "phone": ["Format nomor telepon tidak valid..."]
  }
}
```

---

### 2. Submit Contact Form
```http
POST /api/contact/submit
Content-Type: application/json

{
  "name": "John Doe",          // Required: min 3 chars
  "email": "john@example.com", // Required: valid email
  "phone": "08123456789",      // Optional: Indonesian format
  "subject": "Inquiry",        // Optional
  "message": "Hello..."        // Required: min 10 chars
}
```

---

### 3. Submit Booking
```http
POST /api/booking/submit
Content-Type: application/json

{
  "name": "John Doe",          // Required
  "email": "john@example.com", // Required
  "phone": "08123456789",      // Required
  "service": "Web Development",// Required
  "date": "2025-02-15",        // Optional: cannot be past
  "notes": "Morning preferred" // Optional
}
```

---

## 🔐 Validation Rules

### Phone Number Format
✅ Valid:
- `08123456789`
- `+628123456789`
- `628123456789`

❌ Invalid:
- `123456` (too short)
- `abc123` (contains letters)
- `+1234567890` (not Indonesian)

### Email Format
✅ Valid:
- `user@example.com`
- `user.name@example.co.id`

❌ Invalid:
- `user@` (incomplete)
- `user@invalid` (no TLD)
- `invalid.email` (no @)

### Name Format
✅ Valid:
- `John Doe` (min 3 chars)
- `John-Paul O'Brien`

❌ Invalid:
- `Jo` (too short)
- `<script>John</script>` (HTML tags)

---

## 🛡️ Rate Limiting

**Limit**: 10 requests per minute per IP

**Response when exceeded (429):**
```json
{
  "success": false,
  "message": "Terlalu banyak percobaan. Silakan coba lagi dalam X menit.",
  "retry_after": 600
}
```

---

## 🧪 Testing Commands

### Test Valid Submission
```bash
curl -X POST http://localhost/api/chat/submit-lead \
  -H "Content-Type: application/json" \
  -d '{"department":"Sales","name":"John Doe","email":"john@example.com","phone":"08123456789"}'
```

### Test Invalid Phone
```bash
curl -X POST http://localhost/api/chat/submit-lead \
  -H "Content-Type: application/json" \
  -d '{"department":"Sales","name":"John Doe","email":"john@example.com","phone":"123"}'
```

### Test Rate Limiting
```bash
for i in {1..11}; do
  curl -X POST http://localhost/api/chat/submit-lead \
    -H "Content-Type: application/json" \
    -d '{"department":"Sales","name":"Test","email":"test@test.com","phone":"08123456789"}'
done
```

---

## 📝 Error Messages (Bahasa Indonesia)

| Field | Error | Message |
|-------|-------|---------|
| department | required | "Silakan pilih departemen yang ingin Anda hubungi." |
| department | invalid | "Departemen yang dipilih tidak valid." |
| name | required | "Nama wajib diisi." |
| name | too short | "Nama minimal 3 karakter." |
| email | required | "Email wajib diisi." |
| email | invalid | "Format email tidak valid." |
| phone | required | "Nomor telepon wajib diisi." |
| phone | invalid | "Format nomor telepon tidak valid. Gunakan format Indonesia (contoh: 08123456789)." |
| message | required | "Pesan wajib diisi." |
| message | too short | "Pesan minimal 10 karakter." |

---

## 🔍 Debugging

### Check Logs
```bash
# View Laravel logs
tail -f storage/logs/laravel.log

# Filter Telegram-related logs
tail -f storage/logs/laravel.log | grep Telegram
```

### Check Routes
```bash
php artisan route:list --path=api
```

### Clear Cache
```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
```

---

## 🎯 Quick Checklist

### Before Testing:
- [ ] `.env` has TELEGRAM_BOT_TOKEN
- [ ] `.env` has TELEGRAM_CHAT_ID
- [ ] Run `php artisan config:clear`
- [ ] Check routes: `php artisan route:list`

### During Testing:
- [ ] Test valid submission
- [ ] Test invalid phone format
- [ ] Test invalid email format
- [ ] Test rate limiting (11 requests)
- [ ] Check Telegram for notifications

### After Testing:
- [ ] Check logs: `storage/logs/laravel.log`
- [ ] Verify Telegram messages received
- [ ] Test frontend form submission
- [ ] Test error display in browser

---

## 🚨 Troubleshooting

### Issue: "Validation failed"
**Solution**: Check request payload matches validation rules

### Issue: "Too many attempts"
**Solution**: Wait 1 minute or test from different IP

### Issue: "Telegram notification not sent"
**Solution**: 
1. Check `.env` credentials
2. Run `php artisan telegram:test`
3. Check logs for errors

### Issue: "CSRF token mismatch"
**Solution**: Ensure `<meta name="csrf-token">` exists in HTML head

---

## 📚 Related Files

- **Full Documentation**: `IMPLEMENTATION_REPORT.md`
- **Summary**: `SUMMARY.md`
- **Telegram Setup**: `TELEGRAM_SETUP_QUICK_START.md`
- **Integration Guide**: `TELEGRAM_INTEGRATION.md`

---

**Last Updated**: 6 Februari 2025  
**Version**: 1.0
