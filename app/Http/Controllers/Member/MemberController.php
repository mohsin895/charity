<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
   public function index(){
    
    return view('member.dashboard');
   }

   public function logout()
   {
       Session::flush();
   
   
   return redirect('/');
   }
}
