<?php

namespace Modules\SystemConfiguration\Http\Requests\School;

use Illuminate\Foundation\Http\FormRequest;

class SchoolStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'upazila_id' => 'required|exists:upazilas,id',
            'school_name' => 'required|string|max:255',
            'school_identify_code' => 'required|string|max:20',
        ];
    }

    public function message(): array
    {
        return [
            //
        ];
    }
}
