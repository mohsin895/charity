<?php

namespace Modules\Authentication\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Traits\ApiResponse;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Modules\Authentication\Http\Requests\Auth\RegisterRequest;
use Modules\Authentication\Http\Requests\ProfileUpdateRequest;
use Modules\Authentication\Models\User;

class AuthController extends Controller
{
    use ApiResponse;

    public function user(Request $request)
    {
        try {
            $user = User::where('id', Auth::id())->first();

            if ($user) {
                $user = [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'phone' => $user->phone,
                    'image' => asset('uploads/images/'.$user->image),
                    'role' => $user->role?->name ?? 'no-role-assign',
                    'status' => $user->status,
                ];

                return $this->ResponseSuccess($user, 'Profile fetched successfully.');
            } else {
                return $this->ResponseError([], 'Profile not found.');
            }
        } catch (Exception $e) {
            return $this->ResponseError([], 'An error occurred while fetching the profile.');
        }
    }

    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return $this->ResponseError([], 'The provided credentials are incorrect..');
        }

        $accessToken = $user->createToken('app')->accessToken;

        return $this->ResponseSuccess([
            'user' => $user,
            'access_token' => $accessToken,
        ]);
    }

    public function register(RegisterRequest $request)
    {
        User::create([
            'name' => $request->name,
            'username' => Str::slug($request->name),
            'email' => $request->email,
            'phone' => $request->phone,
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make($request->password),

        ]);

        return $this->ResponseSuccess([], 'Registration Successfully Done.');
    }

    public function profileUpdate(ProfileUpdateRequest $request)
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return $this->ResponseSuccess([], 'Profile Update Successfully Done.');
    }

    public function changePassword(Request $request)
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return $this->ResponseSuccess([], 'Password Changes Successfully Done.');
    }

    public function logout(Request $request)
    {
        try {
            $result = $request->user()->token()->revoke();
            if ($result) {
                return $this->ResponseSuccess([], 'Logout Success');
            }
        } catch (Exception $e) {
            return $this->ResponseSuccess([], 'Logout Failed');
        }
    }
}
