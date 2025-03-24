<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['user_id', 'booking_date', 'reminder_time', 'reminder_sent'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
