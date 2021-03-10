<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'room_id', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getSenderAttribute()
    {
        return $this->user->name;
    }
}