<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth ;
use Illuminate\Support\Facades\DB ;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailVerify;
use App\Mail\ForgetPassword;
use Illuminate\Support\Facades\Log; 
use App\Models\Otp;
use Session;
use Exception;
use Carbon\Carbon;

class LoginController extends Controller
{
   public function login(Request $request){

      if ($request->isMethod('post')) {
      $userData = ['email' => $request->email, 'password' => $request->password];
   
       $userInfo = Member::where('email', $request->email)
                       ->where('status', '!=', 0)
                       ->first();
   
       if ($userInfo) {
           if ($userInfo->status == 1) {
            if (Auth::guard('member')->attempt(['email' => $request->email, 'password' => $request->password])) {
               return redirect()->route('member.dashboard');
   
                  
               } else {
                   return response()->json([
                       'status' => false,
                       'message' => 'Wrong credentials. Please enter valid credentials.',
                   ]);
               }
           } else {
               return response()->json([
                   'status' => false,
                   'message' => 'Your account has been temporarily deactivated.',
               ]);
           }
       } else {
           return response()->json([
               'status' => false,
               'message' => 'Invalid credentials.',
           ]);
       }
      }
    return view('auth.member-login');
   }

   public function registration(Request $request){

      if ($request->isMethod('post')) {
      DB::beginTransaction();
      try {
          $validatedData = $request->validate([
              'name' => 'required|string|max:255|regex:/^[A-Za-z]/',
              'email' => 'required',
              'phone' => 'required',
              'password' => 'required|min:8',
             
          ]);
   
          $existingUser = Member::where('email', trim($validatedData['email']))->first();
  
          if (!$existingUser) {
             
              $otpNumber = substr(str_shuffle('0123456789'), 0, 6);
              $user = new Member();
              $user->name = $validatedData['name'];
              $user->phone = $validatedData['phone'];
              $user->member_type = 2;
              $user->email = strtolower(trim($validatedData['email']));
              $user->password = Hash::make($validatedData['password']);
              $user->remember_token = Hash::make($otpNumber);
              $user->is_verify = 2;
              $user->status = 2;
              $user->created_at = Carbon::now();
            
              if ($user->save()) {
               // dd($request->all());
                  $otp = new Otp();
                  $otp->member_id = $user->id;
                  $otp->otp = Hash::make($otpNumber);
                  $otp->expires_at = Carbon::now()->addMinutes(30);
                  $otp->save();
                 

               //    try {
            
               //        $email    = trim($request->email);
               //            $data  =   array(
               //                "title"=>"Trrimber Email verify ",
               //                "otp"    =>$otpNumber,
               //                'email' =>$email,
               //            );
        
               //  Mail::to($email)->send(new EmailVerify($data));
                
               //    } catch (Exception $err) {
               //        DB::rollBack();
               //        $msg = 'Mail Can not Send. Please try again.';
               //        return true;
               //    }
  
                  DB::commit();
                  $msg = 'Your information has been stored successfully. Please check your email to verify your account.';
                  return redirect()->route('member.login');
              } else {
                  DB::rollBack();
                  $msg = 'Failed to sign up. Please try again.';
                  return back();
              }
          } else {
              DB::rollBack();
              $msg = 'Customer is already registered.';
              return back();
          }
      } catch (Exception $err) {
          DB::rollBack();
          Log::error($err->getMessage());
dd($err);
          $msg = 'Something went wrong. Please try again.';
          return back();
      }
   }
    return view('auth.member-registration');
   }

  

   public function verifyOtp(Request $request)
   {
       DB::beginTransaction();
       try {
           // Validate the request
           $validatedData = $request->validate([
               'otp' => 'required|numeric',
               'email' => 'required|email',
           ]);
   
           // Fetch the user
           $existingUser = Member::where('email', trim($validatedData['email']))->first();
           if (!$existingUser) {
               $msg = 'User not found.';
               return back();
             
           }
   
           // Fetch the OTP for the user
           $existingOtp = Otp::where('member_id', $existingUser->id)->first();
           if (!$existingOtp) {
               $msg = 'OTP not found.';
               return back();
              
           }
   
           // Check if the OTP is valid
           $nowTime = Carbon::now();
           if (Hash::check($validatedData['otp'], $existingOtp->otp)) {
               if ($nowTime->lessThanOrEqualTo($existingOtp->expires_at)) {
                   $user = $existingUser;
                   $user->is_verify = 1;
                   $user->status = 1;
                   $user->email_verified_at =$nowTime;
                   if ($user->save()) {
                       $existingOtp->otp = NULL;
                       $existingOtp->save();
                       DB::commit();
                       $msg = 'Your information has been verified successfully.';
                       return back();
                    
                   } else {
                       DB::rollBack();
                       $msg = 'Failed to Verify. Please try again.';
                       return back();
                     
                   }
               } else {
                   DB::rollBack();
                   $msg = 'OTP has expired.';
                   return back();
                 
               }
           } else {
               DB::rollBack();
               $msg = 'Otp is Invalid.';
               return back();
           }
       } catch (Exception $err) {
           DB::rollBack();
           $msg = 'Something went wrong. Please try again.';
           return back();
       }
   }

  


   public function forgetPassword(Request $request)
   {
  
       DB::beginTransaction();
       try {
         $customerInfo=Member::where('email',trim($request->email))->first();
       if(!empty($customerInfo)){
     
           $otp= substr(str_shuffle('0123456789'), 0,4);
           $pass="Your Otp IS:".$otp." For Forget Password";

           $sendOtp = new Otp();
           $sendOtp->member = $customerInfo->id;
           $sendOtp->otp = $otp;
           $sendOtp->expires_at = Carbon::now()->addMinutes(30);
           $sendOtp->save();
           $email    = trim($request->email);
           $data  =   array(
               "title"=>"Trrimber ",
               "otp"    =>$pass,
              
               'email' =>$email,
           );
   
         
            Mail::to($email)->send(new ForgetPassword($data));
         


           DB::commit();
           $msg = 'A new Otp has been sent to your email.';
           return back();

     

    }else{
      
       $msg = 'Customer Information Not Found.';
        return back();

    }
   } catch (Exception $err) {
       DB::rollBack();
       $msg = 'Something went wrong. Please try again.';
       return back();
   }
   }
   
   public function verifyOtpForgetPass(Request $request)
   {
       DB::beginTransaction();
       try {
           // Validate the request
           $validatedData = $request->validate([
               'otp' => 'required|integer',
               'email' => 'required|email',
           ]);
   
           // Fetch the user
           $existingUser = Member::where('email', trim($validatedData['email']))->first();
           if (!$existingUser) {
               $msg = 'User not found.';
               return back();
             
           }
   
           // Fetch the OTP for the user
           $existingOtp = Otp::where('otp',$validatedData['otp'])->first();
           if (!$existingOtp) {
               $msg = 'OTP not found.';
               return back();
              
           }
   
           // Check if the OTP is valid
           $nowTime = Carbon::now();
           if ($validatedData['otp'] == $existingOtp->otp) {
               if ($nowTime->lessThanOrEqualTo($existingOtp->expires_at)) {
                   $user = $existingUser;
                   // $user->is_verify = 1;
                   // $user->status = 1;
   
                   if ($user->save()) {
                       $existingOtp->otp = NULL;
                       $existingOtp->save();
                       DB::commit();
                       $msg = 'Otp verified successfully.';
                       return back();
                    
                   } else {
                       DB::rollBack();
                       $msg = 'Failed to update user status. Please try again.';
                       return back();
                     
                   }
               } else {
                   DB::rollBack();
                   $msg = 'OTP has expired.';
                   return back();
                 
               }
           } else {
               DB::rollBack();
               $msg = 'Otp is Invalid.';
               return back();
           }
       } catch (Exception $err) {
           DB::rollBack();
           $msg = 'Something went wrong. Please try again.';
           return back();
       }
   }

  
}
