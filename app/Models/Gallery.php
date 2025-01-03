<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable =['title'];

    public function images(){
         return $this->hasMany(GalleryImage::class,'gallerie_id','id');
    }
}
