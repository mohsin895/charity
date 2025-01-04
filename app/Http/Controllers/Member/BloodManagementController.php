<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Http\Requests\BloodBankRequest;
use App\Models\BloodBank;
use App\Models\BloodGroup;
use App\Models\District;
use App\Models\Division;
use App\Models\Thana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BloodManagementController extends Controller
{
    public function index(){
        $data['bloodGroups'] = BloodGroup::get();
        $data['divisions'] = Division::get();
        $data['bloodInfo'] = BloodBank::where('member_id',Auth::guard('member')->user()->id)->first();
        $data['thanaInfo'] = Thana::where('id',$data['bloodInfo']->thana_id)->first();
        $data['districtInfo'] = District::where('id',$data['thanaInfo']->district_id)->first();
        $data['divisionInfo'] = Division::where('id',$data['districtInfo']->division_id)->first();
       
        return view('member.blood',$data);
       }

       public function addOrUpdateInfo(BloodBankRequest $request)
       {
      
           try {
               // Get the authenticated member's ID
               $memberId = Auth::guard('member')->user()->id;
              
               // Find or create a record for the member
               $dataInfo = BloodBank::firstOrNew(['member_id' => $memberId]);
             
               // Fill the data with the validated request input
               $dataInfo->fill($request->validated());
     
               // Save the data and check the result
               if ($dataInfo->save()) {
                   return back()->with('success', 'Settings updated successfully.');
               }
       
               return back()->with('error', 'Failed to update settings. Please try again.');
           } catch (\Exception $err) {
               // Log the error and return an error message
               Log::error('Failed to update blood bank info: ' . $err->getMessage());
               return back()->with('error', 'An unexpected error occurred. Please try again.');
           }
       }
}
