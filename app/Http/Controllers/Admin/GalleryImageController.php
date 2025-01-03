<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryImageController extends Controller
{
    public function index($id = null){
        $data['title'] = "Add Media Image";
        $data['dashboard'] ="Dashboard";
        $data['subTitle'] ="Media Image";
        $data['addTitle'] = "Add New Media Image";
        $data['editTitle'] = " Edit Media Image";
        $data['gallerie_id'] = $id;
        $data['dataList']  = GalleryImage::where('gallerie_id',$id)->OrderBy('id','desc')->get();
       return view('backend.gallery.image', $data);
   }

   public function addOrUpdateInfo(Request $request, $id = null)
   {
       // Validate the request
       $validatedData = $request->validate([
        
           'images' => 'required',
           'gallerie_id' => 'required',
          
       ]);
   
       DB::beginTransaction();
       try {
           // Find existing slider or create a new one
           if ($request->hasFile('images')) {
            $galleryimages = $request->file('images');
            foreach ($galleryimages as $key => $image) {
             $dataInfo = new GalleryImage();
             
             $file_name = time().'.'.$image->getClientOriginalExtension();
             $image->move(public_path('uploads/images/gallery/'), $file_name);
             $dataInfo->image = 'uploads/images/gallery/'. $file_name;

             $dataInfo->gallerie_id = $request->gallerie_id;
             $dataInfo->save();
             if (!$dataInfo->save()) {
                // Rollback if any save operation fails
                DB::rollBack();
                return back()->with([
                    'message' => 'Failed to save data. Please try again.',
                    'alert-type' => 'error',
                ]);
            }
         
                 }
                 DB::commit();

                 return back()->with([
                     'message' => 'Data saved successfully.',
                     'alert-type' => 'success',
                 ]);
                
           }
       } catch (\Exception $err) {
           DB::rollBack();
           return back()->with('error', 'Something went wrong. Please try again.');
       }
   }

   public function dataInfoDelete(Request $request, $id =null){
       $dataInfo = GalleryImage::find($id);
       $dataInfo->delete();
       return back()->with('success', 'Data Delete successfully.');
   }
}
