<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BloodGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BloodGroupController extends Controller
{
    public function index(){
        $data['title'] = "Add Blood Group";
        $data['dashboard'] ="Dashboard";
        $data['subTitle'] ="Blood Group";
        $data['addTitle'] = "Add New Blood Group";
        $data['editTitle'] = " Edit Blood Group";
        $data['dataList']  = BloodGroup::OrderBy('id','desc')->get();
       return view('backend.blood.index', $data);
   }

   public function addOrUpdateInfo(Request $request, $id = null)
   {
       // Validate the request
       $validatedData = $request->validate([
           'name' => 'required',
          
       ]);
   
       DB::beginTransaction();
       try {
           // Find existing slider or create a new one
           $dataInfo = $id ? BloodGroup::find($id) : new BloodGroup();
   
           if (!$dataInfo) {
               return back()->with('error', 'Slider not found.');
           }
           $dataInfo->name = $validatedData['name'];
   
           // Save to database
           if ($dataInfo->save()) {
               DB::commit();
               return back()->with('success', $id ? 'Blood Group updated successfully.' : 'Blood Group added successfully.');
           } else {
               DB::rollBack();
               return back()->with('error', 'Failed to save Blood Group. Please try again.');
           }
       } catch (\Exception $err) {
           DB::rollBack();
           return back()->with('error', 'Something went wrong. Please try again.');
       }
   }

   public function dataInfoDelete(Request $request, $id =null){
       $dataInfo = BloodGroup::find($id);
       $dataInfo->delete();
       return back()->with('success', 'Blood Group Delete successfully.');
   }
}
