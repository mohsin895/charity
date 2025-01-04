<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BloodGroup;
use App\Models\District;
use App\Models\Thana;
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
       public function getDistricts(Request $request)
       {
           $districts = District::where('division_id', $request->division_id)->get();
           return response()->json($districts);
       }

       public function getThanas(Request $request)
       {
           $thanas = Thana::where('district_id', $request->district_id)->get();
           return response()->json($thanas);
       }
    

}
