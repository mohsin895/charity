<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index(){
        $data['dataList'] = Donation::orderBy('id','desc')->get();
        return view('frontend.donation',$data);
    }
}
