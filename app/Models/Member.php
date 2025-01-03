<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    protected $fillable =[
        'name',
        'member_type',
        'phone',
        'em_phone',
        'email',
        'fbLink',
        'nid',
        'education',
        'occupation',
        'voluntary',
        'skill',
        'address',
        'pAddress',
    ];
}
