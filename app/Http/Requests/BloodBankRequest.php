<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BloodBankRequest extends FormRequest
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
        'member_id' => 'nullable', // Ensure the ID exists in the members table
        'blood_group_id' => 'required', // Ensure it exists in the blood_groups table
        'thana_id' => 'required', // Ensure it exists in the thanas table
        'last_blood_donation' => 'nullable', // Validate as a date before today
        'blood_donation_date' => 'nullable',
        ];
    }
}
