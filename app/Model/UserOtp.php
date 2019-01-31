<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserOtp extends Model
{
    protected $fillable = [
        'mobile','otp'
    ];

    protected $hidden = [
        'created_at','updated_at'
    ];
}