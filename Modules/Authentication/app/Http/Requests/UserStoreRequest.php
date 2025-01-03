<?php

namespace Modules\Authentication\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,except,id',
            'phone' => 'required|min:9|max:15|unique:users,phone,except,id',
            'username' => 'nullable|string|max:255',
            'password' => 'required|string|min:4',
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
