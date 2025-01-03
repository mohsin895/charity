<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function index(){
        $data['title'] = "Add Gallery";
        $data['dashboard'] ="Dashboard";
        $data['subTitle'] ="Gallery";
        $data['addTitle'] = "Add New Gallery";
        $data['editTitle'] = " Edit Gallery";
        $data['dataList']  = Gallery::OrderBy('id','desc')->get();
       return view('backend.gallery.index', $data);
   }

   public function addOrUpdateInfo(Request $request, $id = null)
   {
       // Validate the request
       $validatedData = $request->validate([
        
           'title' => 'required',
          
          
       ]);
   
       DB::beginTransaction();
       try {
           // Find existing slider or create a new one
           $dataInfo = $id ? Gallery::find($id) : new Gallery();
   
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
       $dataInfo = Gallery::find($id);
       $dataInfo->delete();
       return back()->with('success', 'Data Delete successfully.');
   }
}
