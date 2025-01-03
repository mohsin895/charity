<?php

namespace Modules\SystemConfiguration\Http\Requests\Upazila;

use Illuminate\Foundation\Http\FormRequest;

class UpazilaUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:191',
            'code' => 'nullable|string|max:20',
        ];
    }

    public function message(): array
    {
        return [
            //
        ];
    }
}
