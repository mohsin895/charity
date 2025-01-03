<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ActivityController extends Controller
{
    public function index(){
        $data['title'] = "Add Activity";
        $data['dashboard'] ="Dashboard";
        $data['subTitle'] ="Activity";
        $data['addTitle'] = "Add New Activity";
        $data['editTitle'] = " Edit Activity";
        $data['dataList']  = Activite::OrderBy('id','desc')->get();
       return view('backend.activity.index', $data);
   }

   public function addOrUpdateInfo(Request $request, $id = null)
   {
       // Validate the request
       $validatedData = $request->validate([
       
           'title' => 'required',
           'description' => 'required',
          
       ]);
   
       DB::beginTransaction();
       try {
           // Find existing slider or create a new one
           $dataInfo = $id ? Activite::find($id) : new Activite();
   
           if (!$dataInfo) {
               return back()->with('error', 'Data not found.');
           }
           $dataInfo->fill($validatedData);
           // Assign values
       
   
           // Save to database
           if ($dataInfo->save()) {
               DB::commit();
               return back()->with('success', $id ? 'Data updated successfully.' : 'Slider added successfully.');
           } else {
               DB::rollBack();
               return back()->with('error', 'Failed to save Data. Please try again.');
           }
       } catch (\Exception $err) {
           DB::rollBack();
           return back()->with('error', 'Something went wrong. Please try again.');
       }
   }

   public function dataInfoDelete(Request $request, $id =null){
       $dataInfo = Activite::find($id);
       $dataInfo->delete();
       return back()->with('success', 'Data Delete successfully.');
   }
}
