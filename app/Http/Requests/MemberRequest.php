<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
           'name'=>'required',
           'member_type'=>'required',
           'phone'=>'required',
           'em_phone'=>'required',
           'email'=>'required',
           'fbLink'=>'required',
           'nid'=>'required',
           'education'=>'required',
           'occupation'=>'required',
           'voluntary'=>'required',
           'skill'=>'required',
           'address'=>'required',
           'pAddress'=>'required',
        ];
    }
}
