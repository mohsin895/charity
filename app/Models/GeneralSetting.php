<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
  protected $fillable = [
    'title',
    'phone',
    'email',
    'logo',
    'favIcon',
    'tLink',
    'fLink',
    'yLink',
    'iLink',
    'address',
    'url',
    'footer_content',
    'blood_hsitory',
  ];
}
