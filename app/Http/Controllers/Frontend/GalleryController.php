<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $data['dataList'] = Gallery::with('images')->orderBy('id','desc')->get();
        return view('frontend.media',$data);
    }
}
