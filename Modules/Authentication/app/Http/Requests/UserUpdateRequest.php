<?php

namespace Modules\Authentication\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|min:9|max:15',
            'username' => 'nullable|string|max:255',
            'password' => 'nullable|string|min:4',
            'role_id' => 'required|exists:roles,id',
        ];
    }

    public function message(): array
    {
        return [
            //
        ];
    }
}
