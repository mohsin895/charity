<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function login(){
    return view('auth.member-login');
   }

   public function registration(){
    return view('auth.member-registration');
   }
}
