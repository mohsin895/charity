<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BloodBank extends Model
{
    protected $fillable = [
        'member_id',
        'blood_group_id',
        'thana_id',
        'last_blood_donation',
        'blood_donation_date',
    ];
}
