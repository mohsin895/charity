<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BloodGroup;
use App\Models\Donation;
use App\Models\GalleryImage;
use App\Models\ProjectCategory;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $data['sliderList'] = Slider::where('status','active')->OrderBy('id','desc')->get();
        $data['galleries'] = GalleryImage::orderBy('id','desc')->get();
        $data['donationList'] = Donation::orderBy('id','desc')->get();
        $data['projectList'] = ProjectCategory::orderBy('id','desc')->get();

        $data['bloodgroups'] = BloodGroup::get();
        return view(view: 'frontend.index', data: $data);
    }
}
