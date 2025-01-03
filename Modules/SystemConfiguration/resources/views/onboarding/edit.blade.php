@extends('layouts.backend')
@section('page_title_breadcrumb')
    {{ ucfirst('onboarding') }}
@endsection

@section('create-button')
    <a href="{{ route('onboardings.index') }}" class="btn btn-sm fw-bold btn-primary">
        {{ ucfirst('onboarding') }} List
    </a>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('onboardings.update', $onboarding->id) }}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PATCH')

                <div class="row">
                    <!-- Second Grid Form for Update -->
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <!-- পরীক্ষার্থীর নাম -->
                        <div class="sm:col-span-2">
                            <label for="sname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                পরীক্ষার্থীর নাম (বাংলায়)
                            </label>
                            <input type="text" name="sname" id="sname" placeholder="পরীক্ষার্থীর নাম লিখুন"
                                value="{{ $onboarding->sname }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">

                            @error('sname')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- পিতার নাম -->
                        <div>
                            <label for="fname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                পিতার নাম (বাংলায়)
                            </label>
                            <input type="text" name="fname" id="fname" placeholder="পিতার নাম লিখুন"
                                value="{{ $onboarding->fname }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">

                            @error('fname')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- মাতার নাম -->
                        <div>
                            <label for="mname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                মাতার নাম (বাংলায়)
                            </label>
                            <input type="text" name="mname" id="mname" placeholder="মাতার নাম লিখুন"
                                value="{{ $onboarding->mname }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">

                            @error('mname')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- মোবাইল নং -->
                        <div>
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                মোবাইল নং (ইংরেজিতে)
                            </label>

                            <input type="number" name="phone" placeholder="মোবাইল নম্বর লিখুন" minlength="11"
                                maxlength="11" oninput="validatePhoneNumber(this)" value="{{ $onboarding->phone }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">

                            <div class="mt-2 text-red-500" id="validation-message"></div>

                            @error('phone')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Gender -->
                        <div class="mb-3">
                            <label for="gender" class="form-label">
                                লিঙ্গ
                            </label>
                            <select name="gender" id="gender" class="form-select" aria-label="Gender">
                                <option value="" selected>নির্বাচন করুন ...</option>
                                <option value="ছেলে" {{ $onboarding->gender == 'ছেলে' ? 'selected' : '' }}>ছেলে</option>
                                <option value="মেয়ে" {{ $onboarding->gender == 'মেয়ে' ? 'selected' : '' }}>মেয়ে</option>
                                <option value="অন্যান্য" {{ $onboarding->gender == 'অন্যান্য' ? 'selected' : '' }}>অন্যান্য
                                </option>
                            </select>

                            @error('gender')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Religion -->
                        <div class="mb-3">
                            <label for="religion" class="form-label">
                                ধর্ম
                            </label>
                            <select name="religion" id="religion" class="form-select" aria-label="Religion">
                                <option value="" selected>নির্বাচন করুন ...</option>
                                <option value="ইসলাম" {{ $onboarding->religion == 'ইসলাম' ? 'selected' : '' }}>ইসলাম
                                </option>
                                <option value="হিন্দু" {{ $onboarding->religion == 'হিন্দু' ? 'selected' : '' }}>হিন্দু
                                </option>
                                <option value="খ্রিস্টান" {{ $onboarding->religion == 'খ্রিস্টান' ? 'selected' : '' }}>
                                    খ্রিস্টান
                                </option>
                                <option value="বৌদ্ধ" {{ $onboarding->religion == 'বৌদ্ধ' ? 'selected' : '' }}>বৌদ্ধ
                                </option>
                                <option value="অন্যান্য" {{ $onboarding->religion == 'অন্যান্য' ? 'selected' : '' }}>
                                    অন্যান্য
                                </option>
                            </select>

                            @error('religion')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Blood Group -->
                        <div class="mb-3">
                            <label for="blood_group" class="form-label">
                                রক্তের গ্রুপ
                            </label>
                            <select name="blood_group" id="blood_group" class="form-select" aria-label="Blood Group">
                                <option value="" selected>নির্বাচন করুন ...</option>
                                <option value="A+" {{ $onboarding->blood_group == 'A+' ? 'selected' : '' }}>A+</option>
                                <option value="A-" {{ $onboarding->blood_group == 'A-' ? 'selected' : '' }}>A-</option>
                                <option value="B+" {{ $onboarding->blood_group == 'B+' ? 'selected' : '' }}>B+</option>
                                <option value="B-" {{ $onboarding->blood_group == 'B-' ? 'selected' : '' }}>B-</option>
                                <option value="AB+" {{ $onboarding->blood_group == 'AB+' ? 'selected' : '' }}>AB+
                                </option>
                                <option value="AB-" {{ $onboarding->blood_group == 'AB-' ? 'selected' : '' }}>AB-
                                </option>
                                <option value="O+" {{ $onboarding->blood_group == 'O+' ? 'selected' : '' }}>O+</option>
                                <option value="O-" {{ $onboarding->blood_group == 'O-' ? 'selected' : '' }}>O-</option>
                            </select>

                            @error('blood_group')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- জন্ম সনদ নং -->
                        <div class="sm:col-span-2">
                            <label for="birth_certificate_no"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                জন্ম সনদ নং
                            </label>
                            <input type="text" name="birth_certificate_no" id="birth_certificate_no"
                                placeholder="জন্ম সনদ নং" value="{{ $onboarding->birth_certificate_no }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">

                            @error('birth_certificate_no')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- উপজেলা -->
                        <div>
                            <label for="school_id" class="form-label">
                                উপজেলা
                            </label>
                            <select name="upazila_id" id="upazila_id" class="form-select">
                                @foreach ($upazilas as $upazila)
                                    <option {{ $onboarding->upazila_id == $upazila->id ? 'selected' : '' }}
                                        value="{{ $upazila->id }}">
                                        {{ $upazila->name }}
                                    </option>
                                @endforeach
                            </select>

                            @error('upazila_id')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- School Name -->
                        <div class="mb-3">
                            <label for="school_id" class="form-label">
                                শিক্ষা প্রতিষ্ঠানের নাম (বাংলায়)
                            </label>
                            <select name="school_id" id="school_id" class="form-select">
                                <option value="">নির্বাচন করুন ...</option>
                                @foreach ($schools as $school)
                                    <option value="{{ $school->id }}"
                                        {{ $onboarding->school_id == $school->id ? 'selected' : '' }}>
                                        {{ $school->school_name }}
                                    </option>
                                @endforeach
                            </select>

                            @error('school_id')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- স্কুল আইডেন্টিফাই কোড -->
                        <div>
                            <label for="school_identify_code"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                স্কুল আইডেন্টিফাই কোড
                            </label>
                            <input type="text" name="school_identify_code" id="school_identify_code"
                                placeholder="স্কুল আইডেন্টিফাই কোড" value="{{ $onboarding->school_identify_code }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">

                            @error('school_identify_code')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- শ্রেণি -->
                        <div>
                            <label for="sclass" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                শ্রেণি
                            </label>
                            <select name="sclass" id="sclass"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">

                                <option value="7" {{ $onboarding->sclass == '7' ? 'selected' : '' }}>৭ম শ্রেণি
                                </option>
                                <option value="8" {{ $onboarding->sclass == '8' ? 'selected' : '' }}>৮ম শ্রেণি
                                </option>
                                <option value="9" {{ $onboarding->sclass == '9' ? 'selected' : '' }}>৯ম শ্রেণি
                                </option>
                                <option value="10" {{ $onboarding->sclass == '10' ? 'selected' : '' }}>১০ম
                                    শ্রেণি
                                </option>
                            </select>

                            @error('sclass')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- ঠিকানা -->
                        <div class="sm:col-span-2">
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ঠিকানা (বাংলায়)
                            </label>
                            <div class="grid gap-4 sm:grid-cols-2">
                                <div>
                                    <input type="text" name="village" id="village" placeholder="গ্রাম/শহর"
                                        value="{{ $onboarding->village }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">

                                    @error('school_identify_code')
                                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <input type="text" name="postoffice" id="postoffice" placeholder="ডাকঘর"
                                        value="{{ $onboarding->postoffice }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">
                                    @error('postoffice')
                                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <input type="text" name="district" id="district" placeholder="জেলা"
                                        value="{{ $onboarding->district }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">
                                    @error('district')
                                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-9">
                        <button type="submit" class="btn btn-primary mt-5">{{ _lang('Update') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
