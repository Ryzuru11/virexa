<?php

namespace App\Helpers;

/**
 * Input Sanitizer Helper
 * 
 * Provides additional input sanitization methods for security
 */
class InputSanitizer
{
    /**
     * Sanitize phone number to Indonesian format
     * 
     * @param string $phone
     * @return string
     */
    public static function sanitizePhone(string $phone): string
    {
        // Remove all non-numeric characters except +
        $phone = preg_replace('/[^0-9+]/', '', $phone);
        
        // Convert 62 prefix to +62
        if (str_starts_with($phone, '62') && !str_starts_with($phone, '+62')) {
            $phone = '+' . $phone;
        }
        
        // Convert 0 prefix to +62
        if (str_starts_with($phone, '0')) {
            $phone = '+62' . substr($phone, 1);
        }
        
        return $phone;
    }

    /**
     * Sanitize name (remove special characters, keep spaces and hyphens)
     * 
     * @param string $name
     * @return string
     */
    public static function sanitizeName(string $name): string
    {
        // Remove HTML tags
        $name = strip_tags($name);
        
        // Remove special characters except spaces, hyphens, and apostrophes
        $name = preg_replace('/[^a-zA-Z0-9\s\-\']/', '', $name);
        
        // Remove multiple spaces
        $name = preg_replace('/\s+/', ' ', $name);
        
        return trim($name);
    }

    /**
     * Sanitize email
     * 
     * @param string $email
     * @return string
     */
    public static function sanitizeEmail(string $email): string
    {
        return filter_var(trim($email), FILTER_SANITIZE_EMAIL);
    }

    /**
     * Sanitize text message (remove dangerous content)
     * 
     * @param string $text
     * @return string
     */
    public static function sanitizeText(string $text): string
    {
        // Remove HTML tags
        $text = strip_tags($text);
        
        // Remove null bytes
        $text = str_replace("\0", '', $text);
        
        // Normalize line breaks
        $text = str_replace(["\r\n", "\r"], "\n", $text);
        
        return trim($text);
    }

    /**
     * Detect and block potential spam patterns
     * 
     * @param string $text
     * @return bool True if spam detected
     */
    public static function isSpam(string $text): bool
    {
        $spamPatterns = [
            '/\b(viagra|cialis|casino|lottery|winner)\b/i',
            '/\b(click here|buy now|limited time)\b/i',
            '/(http|https):\/\/[^\s]{50,}/', // Very long URLs
            '/(.)\1{10,}/', // Repeated characters (10+ times)
        ];
        
        foreach ($spamPatterns as $pattern) {
            if (preg_match($pattern, $text)) {
                return true;
            }
        }
        
        return false;
    }

    /**
     * Sanitize all lead data
     * 
     * @param array $data
     * @return array
     */
    public static function sanitizeLeadData(array $data): array
    {
        return [
            'department' => isset($data['department']) ? self::sanitizeText($data['department']) : '',
            'name' => isset($data['name']) ? self::sanitizeName($data['name']) : '',
            'email' => isset($data['email']) ? self::sanitizeEmail($data['email']) : '',
            'phone' => isset($data['phone']) ? self::sanitizePhone($data['phone']) : '',
        ];
    }

    /**
     * Sanitize all contact data
     * 
     * @param array $data
     * @return array
     */
    public static function sanitizeContactData(array $data): array
    {
        return [
            'name' => isset($data['name']) ? self::sanitizeName($data['name']) : '',
            'email' => isset($data['email']) ? self::sanitizeEmail($data['email']) : '',
            'phone' => isset($data['phone']) ? self::sanitizePhone($data['phone']) : '',
            'subject' => isset($data['subject']) ? self::sanitizeText($data['subject']) : '',
            'message' => isset($data['message']) ? self::sanitizeText($data['message']) : '',
        ];
    }

    /**
     * Sanitize all booking data
     * 
     * @param array $data
     * @return array
     */
    public static function sanitizeBookingData(array $data): array
    {
        return [
            'name' => isset($data['name']) ? self::sanitizeName($data['name']) : '',
            'email' => isset($data['email']) ? self::sanitizeEmail($data['email']) : '',
            'phone' => isset($data['phone']) ? self::sanitizePhone($data['phone']) : '',
            'service' => isset($data['service']) ? self::sanitizeText($data['service']) : '',
            'date' => $data['date'] ?? null,
            'notes' => isset($data['notes']) ? self::sanitizeText($data['notes']) : '',
        ];
    }
}
