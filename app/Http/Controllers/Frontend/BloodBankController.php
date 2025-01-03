<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BloodGroup;
use Illuminate\Http\Request;

class BloodBankController extends Controller
{
    public function index(){
        return view('frontend.blood');
       }

       public function management(){
        $data['bloodGroups'] = BloodGroup::get();
        return view('frontend.management', $data);
       }
}
