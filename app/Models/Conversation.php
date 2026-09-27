<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $fillable = [
        'user_name',
        'user_email',
        'user_phone',
        'department',
        'last_message_at',
    ];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
