<?php

namespace Modules\SystemConfiguration\Http\Requests\Onboarding;

use Illuminate\Foundation\Http\FormRequest;

class OnboardingStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'sname' => 'required|string|max:100',
            'fname' => 'required|string|max:100',
            'mname' => 'required|string|max:100',
            'phone' => [
                'required',
                'string',
                'max:20',
                'regex:/^[0-9]{10,15}$/',
                'unique:registration_forms,phone', // Ensures the phone number is unique
            ],
            'gender' => 'required|string|in:ছেলে,মেয়ে,অন্যান্য',
            'religion' => 'required|string|in:ইসলাম,হিন্দু,বৌদ্ধ,খ্রিস্টান,অন্যান্য',
            'blood_group' => 'nullable|string|in:A+,A-,B+,B-,O+,O-,AB+,AB-,N/A',
            'upazila_id' => 'required|numeric|exists:upazilas,id', // Ensures the upazila exists
            'school_id' => 'required|numeric|exists:schools,id', // Ensures the school exists
            'school_identify_code' => 'required|string|max:100',
            'sclass' => 'required|numeric|between:1,12',
            'birth_certificate_no' => 'nullable|string|unique:registration_forms,birth_certificate_no',
            'village' => 'required|string|max:255',
            'postoffice' => 'nullable|string|max:255',
            'upozila' => 'nullable|string|max:255',
            'district' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        ];
    }

    public function message(): array
    {
        return [
            'sname.required' => 'শিক্ষার্থীর নাম আবশ্যক।',
            'fname.required' => 'পিতার নাম আবশ্যক।',
            'mname.required' => 'মাতার নাম আবশ্যক।',
            'phone.required' => 'ফোন নম্বর আবশ্যক।',
            'gender.in' => 'লিঙ্গ অবশ্যই ছেলে, মেয়ে অথবা অন্যান্য হতে হবে।',
            'religion.in' => 'ধর্ম অবশ্যই ইসলাম, হিন্দু, বৌদ্ধ, খ্রিস্টান বা অন্যান্য হতে হবে।',
            'blood_group.in' => 'রক্তের গ্রুপ সঠিকভাবে নির্বাচন করুন।',
            'sclass.between' => 'শ্রেণি অবশ্যই ১ থেকে ১২ এর মধ্যে হতে হবে।',
        ];
    }
}
