<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use SoftDeletes;

    protected $fillable = ['phone_number', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
