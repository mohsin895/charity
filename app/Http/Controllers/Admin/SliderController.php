<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    public function index(){
        $data['title'] = "Add Slider";
        $data['dashboard'] ="Dashboard";
        $data['subTitle'] ="Slider";
        $data['addTitle'] = "Add New Slider";
        $data['editTitle'] = " Edit Slider";
        $data['dataList']  = Slider::OrderBy('id','desc')->get();
       return view('backend.slider.index', $data);
   }

   public function addOrUpdateInfo(Request $request, $id = null)
   {
       // Validate the request
       $validatedData = $request->validate([
           'image' => 'nullable',
          
       ]);
   
       DB::beginTransaction();
       try {
           // Find existing slider or create a new one
           $dataInfo = $id ? Slider::find($id) : new Slider();
   
           if (!$dataInfo) {
               return back()->with('error', 'Slider not found.');
           }
   
           // Assign values
           if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/images/sliders/'), $file_name);
            $dataInfo->image = 'uploads/images/sliders/'. $file_name;
        }
   
           // Save to database
           if ($dataInfo->save()) {
               DB::commit();
               return back()->with('success', $id ? 'Slider updated successfully.' : 'Slider added successfully.');
           } else {
               DB::rollBack();
               return back()->with('error', 'Failed to save Slider. Please try again.');
           }
       } catch (\Exception $err) {
           DB::rollBack();
           return back()->with('error', 'Something went wrong. Please try again.');
       }
   }

   public function dataInfoDelete(Request $request, $id =null){
       $dataInfo = Slider::find($id);
       $dataInfo->delete();
       return back()->with('success', 'Slider Delete successfully.');
   }
}
