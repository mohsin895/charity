<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index(){
        $data['title'] = "Add Project";
        $data['dashboard'] ="Dashboard";
        $data['subTitle'] ="Project";
        $data['addTitle'] = "Add New Project";
        $data['editTitle'] = " Edit Project";
        $data['dataList']  = ProjectCategory::OrderBy('id','desc')->get();
       return view('backend.project.index', $data);
   }

   public function addOrUpdateInfo(Request $request, $id = null)
   {
       // Validate the request
       $validatedData = $request->validate([
           'image' => 'nullable',
           'title' => 'required',
           'description' => 'required',
          
       ]);
   
       DB::beginTransaction();
       try {
           // Find existing slider or create a new one
           $dataInfo = $id ? ProjectCategory::find($id) : new ProjectCategory();
   
           if (!$dataInfo) {
               return back()->with('error', 'Data not found.');
           }
           $dataInfo->fill($request->except(['image']));
           // Assign values
           if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/images/projects/'), $file_name);
            $dataInfo->image = 'uploads/images/projects/'. $file_name;
        }
   
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
       $dataInfo = ProjectCategory::find($id);
       $dataInfo->delete();
       return back()->with('success', 'Data Delete successfully.');
   }
}
