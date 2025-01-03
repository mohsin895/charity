<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Activite;
use Illuminate\Http\Request;

class AboutWorkController extends Controller
{
    public function index(){
        $data['dataList'] = Activite::orderBy('id','desc')->get();
        return view('frontend.work',$data);
    }
}
