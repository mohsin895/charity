<?php

namespace Modules\SystemConfiguration\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegistrationForm extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'registration_forms';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sname',
        'fname',
        'mname',
        'phone',
        'gender',
        'religion',
        'blood_group',
        'upazila_id',
        'school_id',
        'school_identify_code',
        'sclass',
        'birth_certificate_no',
        'village',
        'postoffice',
        'upozila',
        'district',
        'image',
        'form_no',
        'roll',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'sclass' => 'integer',
    ];

    public function upazila()
    {
        return $this->belongsTo(Upazila::class, 'upazila_id', 'id');
    }

    public function school()
    {
        return $this->belongsTo(School::class, 'school_id', 'id');
    }
}
