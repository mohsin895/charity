<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailSetting extends Model
{
    protected $fillable =[
        'port',
        'host',
        'user_name',
        'password',
        'sender_email',
        'sender_name',
        'driver',
        'encryption',
];
}