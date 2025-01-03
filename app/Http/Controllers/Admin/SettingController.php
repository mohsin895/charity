<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
   
    public function index(){
        $data['dataInfo'] = GeneralSetting::find(1);
        $data['title'] = "General Setting";
     
         return view('backend.setting.general', $data);
     }

     public function addOrUpdateInfo(SettingRequest $request)
     {
         
         $dataInfo = GeneralSetting::firstOrNew(['id' => 1]);
         $dataInfo->fill($request->except(['logo', 'favIcon']));

         if ($request->hasFile('logo')) {
             $dataInfo->logo = $this->handleImageUpload($request->file('logo'), 'logo');
         }

         if ($request->hasFile('favIcon')) {
             $dataInfo->favIcon = $this->handleImageUpload($request->file('favIcon'), 'favIcon');
         }
 
         $dataInfo->save();
       
         return $dataInfo->save()
             ? back()->with('success', 'Settings updated successfully.')
             : back()->with('error', 'Failed to update settings. Please try again.');
     }
     
     /**
      * Handles image upload and resizing.
      *
      * @param \Illuminate\Http\UploadedFile $image
      * @param string $type
      * @return string
      */
     private function handleImageUpload($image, $type)
     {
         $directory = public_path('uploads/images/setting/');
         if (!file_exists($directory)) {
             mkdir($directory, 0755, true); // Ensure the directory exists
         }
     
         $fileName = uniqid($type . '_') . '.' . $image->getClientOriginalExtension();
         $path = 'uploads/images/setting/' . $fileName;
     
         $imageManager = new \Intervention\Image\ImageManager();
         $width = $type === 'logo' ? 85 : 50;
         $height = $type === 'favIcon' ? 23 : 50;
     
         // Resize and save the image
         $imageManager->make($image->getRealPath())
             ->resize($width, $height)
             ->save(public_path($path), 80);
     
         return $path;
     }
     
}
