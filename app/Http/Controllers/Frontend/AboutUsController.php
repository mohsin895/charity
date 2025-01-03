<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\QuestionAnswer;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        $data['qaList'] = QuestionAnswer::orderBy('id','desc')->get();
        $data['executiveCommetes'] = Member::where('member_type',1)->get();
        $data['members'] = Member::where('member_type',2)->get();
        $data['volunteers'] = Member::where('member_type',3)->get();
        $data['advisers'] = Member::where('member_type',4)->get();
        $data['consultants'] = Member::where('member_type',5)->get();
        return view('frontend.about', $data);
    }
}
