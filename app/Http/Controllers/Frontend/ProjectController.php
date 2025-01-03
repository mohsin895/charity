<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $data['dataList'] = ProjectCategory::orderBy('id','desc')->get();
        return view('frontend.project', $data);
    }
}
