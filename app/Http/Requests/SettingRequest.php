<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'favIcon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tLink' => 'nullable|url',
            'fLink' => 'nullable|url',
            'yLink' => 'nullable|url',
            'iLink' => 'nullable|url',
            'address' => 'nullable',
            'url' => 'nullable|url',
            'footer_content' => 'nullable|string',
            'blood_hsitory' => 'nullable',
        ];
    }
}
