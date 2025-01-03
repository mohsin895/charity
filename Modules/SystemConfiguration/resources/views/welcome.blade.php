@extends('layouts.frontend')

@section('content')
    <section class="bg-[#c8c8c8] py-10">
        <div class="px-4 mx-auto max-w-screen-md">
            <div class="bg-white border rounded-lg shadow-lg p-8  lg:p-12">
                <h2 style="color:black">বিক্রমপুর মানব সেবা ফাউন্ডেশন মেধাবৃত্তি-২০২৪ পরীক্ষার রেজিষ্ট্রেশন কার্যক্রম সমাপ্ত।<br><br>

মেধাবৃত্তি পরীক্ষা আগামী ২৮ ডিসেম্বর ২০২৪ খ্রি. রোজ শনিবার ,বেলা ১১:০০ মিনিট।<br><br>

মুন্সিগঞ্জ সদর, টংগিবাড়ী, লৌহজং উপজেলার অধীন বিদ্যালয়গুলোর পরীক্ষা কেন্দ্র : সোনারং সরকারি পাইলট মডেল উচ্চ বিদ্যালয়, টংগিবাড়ী।

সিরাজদিখান ও শ্রীনগর উপজেলার অধীন বিদ্যালয়গুলোর পরীক্ষা কেন্দ্র : রাজদিয়া অভয় পাইলট স্কুল এন্ড কলেজ, সিরাজদিখান।</h2>
            </div>
            <!--<div class="bg-white border rounded-lg shadow-lg p-8  lg:p-12">-->
            <!--    <h2 class="mb-4 text-xl font-bold text-gray-900 text-center">-->
            <!--        মেধাবৃত্তি আবেদন ফরম-->
            <!--    </h2>-->

            <!--    <form action="{{ route('registration-form.store') }}" method="POST" enctype="multipart/form-data"-->
            <!--        onsubmit="validateForm(event)">-->
            <!--        @csrf-->

            <!--        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">-->
                        <!-- পরীক্ষার্থীর নাম -->
            <!--            <div class="sm:col-span-2">-->
            <!--                <label for="sname" class="block mb-2 text-sm font-medium text-gray-900">-->
            <!--                    পরীক্ষার্থীর নাম (বাংলায়)-->
            <!--                </label>-->
            <!--                <input type="text" name="sname" id="sname" placeholder="পরীক্ষার্থীর নাম লিখুন"-->
            <!--                    value="{{ old('sname') }}"-->
            <!--                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"-->
            <!--                    required>-->

            <!--                @error('sname')-->
            <!--                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>-->
            <!--                @enderror-->
            <!--            </div>-->
                        <!-- পিতার নাম -->
            <!--            <div>-->
            <!--                <label for="fname" class="block mb-2 text-sm font-medium text-gray-900">-->
            <!--                    পিতার নাম (বাংলায়)-->
            <!--                </label>-->
            <!--                <input type="text" name="fname" id="fname" placeholder="পিতার নাম লিখুন"-->
            <!--                    value="{{ old('fname') }}"-->
            <!--                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"-->
            <!--                    required>-->

            <!--                @error('fname')-->
            <!--                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>-->
            <!--                @enderror-->
            <!--            </div>-->
                        <!-- মাতার নাম -->
            <!--            <div>-->
            <!--                <label for="mname" class="block mb-2 text-sm font-medium text-gray-900">-->
            <!--                    মাতার নাম (বাংলায়)-->
            <!--                </label>-->
            <!--                <input type="text" name="mname" id="mname" placeholder="মাতার নাম লিখুন"-->
            <!--                    value="{{ old('mname') }}"-->
            <!--                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"-->
            <!--                    required>-->

            <!--                @error('mname')-->
            <!--                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>-->
            <!--                @enderror-->
            <!--            </div>-->
                        <!-- মোবাইল নং -->
            <!--            <div>-->
            <!--                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">-->
            <!--                    মোবাইল নং (ইংরেজিতে)-->
            <!--                </label>-->

            <!--                <input type="number" name="phone" placeholder="মোবাইল নম্বর লিখুন" minlength="11"-->
            <!--                    maxlength="11" oninput="validatePhoneNumber(this)" value="{{ old('phone') ?? '01' }}"-->
            <!--                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"-->
            <!--                    required>-->

            <!--                @error('phone')-->
            <!--                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>-->
            <!--                @enderror-->

            <!--                <div class="mt-2 text-red-500" id="validation-message"></div>-->

            <!--            </div>-->

                        <!-- লিঙ্গ -->
            <!--            <div>-->
            <!--                <label for="gender" class="block mb-2 text-sm font-medium text-gray-900">-->
            <!--                    লিঙ্গ-->
            <!--                </label>-->
            <!--                <select name="gender" id="gender"-->
            <!--                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"-->
            <!--                    required>-->
            <!--                    <option value="" selected>নির্বাচন করুন ...</option>-->
            <!--                    <option value="ছেলে" {{ old('gender') == 'ছেলে' ? 'selected' : '' }}>ছেলে</option>-->
            <!--                    <option value="মেয়ে" {{ old('gender') == 'মেয়ে' ? 'selected' : '' }}>মেয়ে</option>-->
            <!--                    <option value="অন্যান্য" {{ old('gender') == 'অন্যান্য' ? 'selected' : '' }}>অন্যান্য-->
            <!--                    </option>-->
            <!--                </select>-->

            <!--                @error('gender')-->
            <!--                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>-->
            <!--                @enderror-->
            <!--            </div>-->

                        <!-- ধর্ম -->
            <!--            <div>-->
            <!--                <label for="religion" class="block mb-2 text-sm font-medium text-gray-900">-->
            <!--                    ধর্ম-->
            <!--                </label>-->
            <!--                <select name="religion" id="religion"-->
            <!--                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"-->
            <!--                    required>-->
            <!--                    <option value="" selected>নির্বাচন করুন ...</option>-->
            <!--                    <option value="ইসলাম" {{ old('religion') == 'ইসলাম' ? 'selected' : '' }}>ইসলাম-->
            <!--                    </option>-->
            <!--                    <option value="হিন্দু" {{ old('religion') == 'হিন্দু' ? 'selected' : '' }}>হিন্দু-->
            <!--                    </option>-->
            <!--                    <option value="খ্রিস্টান" {{ old('religion') == 'খ্রিস্টান' ? 'selected' : '' }}>-->
            <!--                        খ্রিস্টান</option>-->
            <!--                    <option value="বৌদ্ধ" {{ old('religion') == 'বৌদ্ধ' ? 'selected' : '' }}>বৌদ্ধ-->
            <!--                    </option>-->
            <!--                    <option value="অন্যান্য" {{ old('religion') == 'অন্যান্য' ? 'selected' : '' }}>-->
            <!--                        অন্যান্য</option>-->
            <!--                </select>-->

            <!--                @error('religion')-->
            <!--                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>-->
            <!--                @enderror-->
            <!--            </div>-->

                        <!-- রক্তের গ্রুপ -->
            <!--            <div>-->
            <!--                <label for="blood_group" class="block mb-2 text-sm font-medium text-gray-900">-->
            <!--                    রক্তের গ্রুপ-->
            <!--                </label>-->
            <!--                <select name="blood_group" id="blood_group"-->
            <!--                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">-->
            <!--                    <option value="" selected>নির্বাচন করুন ...</option>-->
            <!--                    <option value="N/A" {{ old('blood_group') == 'N/A' ? 'selected' : '' }}>N/A</option>-->
            <!--                    <option value="A+" {{ old('blood_group') == 'A+' ? 'selected' : '' }}>A+</option>-->
            <!--                    <option value="A-" {{ old('blood_group') == 'A-' ? 'selected' : '' }}>A-</option>-->
            <!--                    <option value="B+" {{ old('blood_group') == 'B+' ? 'selected' : '' }}>B+</option>-->
            <!--                    <option value="B-" {{ old('blood_group') == 'B-' ? 'selected' : '' }}>B-</option>-->
            <!--                    <option value="AB+" {{ old('blood_group') == 'AB+' ? 'selected' : '' }}>AB+-->
            <!--                    </option>-->
            <!--                    <option value="AB-" {{ old('blood_group') == 'AB-' ? 'selected' : '' }}>AB--->
            <!--                    </option>-->
            <!--                    <option value="O+" {{ old('blood_group') == 'O+' ? 'selected' : '' }}>O+</option>-->
            <!--                    <option value="O-" {{ old('blood_group') == 'O-' ? 'selected' : '' }}>O-</option>-->
            <!--                </select>-->

            <!--                @error('blood_group')-->
            <!--                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>-->
            <!--                @enderror-->
            <!--            </div>-->

                        <!-- জন্ম সনদ নং -->
            <!--            <div class="sm:col-span-2">-->
            <!--                <label for="birth_certificate_no" class="block mb-2 text-sm font-medium text-gray-900">-->
            <!--                    জন্ম সনদ নং-->
            <!--                </label>-->
            <!--                <input type="text" name="birth_certificate_no" id="birth_certificate_no"-->
            <!--                    placeholder="জন্ম সনদ নং" value="{{ old('birth_certificate_no') }}"-->
            <!--                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">-->

            <!--                @error('birth_certificate_no')-->
            <!--                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>-->
            <!--                @enderror-->
            <!--            </div>-->

                        <!-- উপজেলা -->
            <!--            <div>-->
            <!--                <label for="upazila_id" class="block mb-2 text-sm font-medium text-gray-900">উপজেলা</label>-->
            <!--                <select name="upazila_id" id="upazila_id"-->
            <!--                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">-->
            <!--                    <option value="" selected>নির্বাচন করুন ...</option>-->
            <!--                    @foreach ($upazilas as $upazila)-->
            <!--                        <option value="{{ $upazila->id }}">-->
            <!--                            {{ $upazila->name }}-->
            <!--                        </option>-->
            <!--                    @endforeach-->
            <!--                </select>-->
            <!--                @error('upazila_id')-->
            <!--                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>-->
            <!--                @enderror-->
            <!--            </div>-->

                        <!-- শিক্ষা প্রতিষ্ঠানের নাম -->
            <!--            <div>-->
            <!--                <label for="school_id" class="block mb-2 text-sm font-medium text-gray-900">শিক্ষা-->
            <!--                    প্রতিষ্ঠানের নাম (বাংলায়)</label>-->
            <!--                <select name="school_id" id="school_id"-->
            <!--                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"-->
            <!--                    required>-->
            <!--                    <option value="" selected>নির্বাচন করুন ...</option>-->
            <!--                </select>-->

            <!--                @error('school_id')-->
            <!--                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>-->
            <!--                @enderror-->
            <!--            </div>-->

                        <!-- স্কুল আইডেন্টিফাই কোড -->
            <!--            <div>-->
            <!--                <label for="school_identify_code" class="block mb-2 text-sm font-medium text-gray-900">-->
            <!--                    স্কুল আইডেন্টিফাই কোড-->
            <!--                </label>-->
            <!--                <input type="text" name="school_identify_code" id="school_identify_code"-->
            <!--                    placeholder="স্কুল আইডেন্টিফাই কোড" value="{{ old('school_identify_code') }}"-->
            <!--                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"-->
            <!--                    required>-->

            <!--                @error('school_identify_code')-->
            <!--                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>-->
            <!--                @enderror-->
            <!--            </div>-->

                        <!-- শ্রেণি -->
            <!--            <div>-->
            <!--                <label for="sclass" class="block mb-2 text-sm font-medium text-gray-900">-->
            <!--                    শ্রেণি-->
            <!--                </label>-->
            <!--                <select name="sclass" id="sclass"-->
            <!--                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"-->
            <!--                    required>-->
            <!--                    <option value="">নির্বাচন করুন ...</option>-->
            <!--                    <option value="7" {{ old('sclass') == '7' ? 'selected' : '' }}>৭ম শ্রেণি-->
            <!--                    </option>-->
            <!--                    <option value="8" {{ old('sclass') == '8' ? 'selected' : '' }}>৮ম শ্রেণি-->
            <!--                    </option>-->
            <!--                    <option value="9" {{ old('sclass') == '9' ? 'selected' : '' }}>৯ম শ্রেণি-->
            <!--                    </option>-->
            <!--                    <option value="10" {{ old('sclass') == '10' ? 'selected' : '' }}>১০ম-->
            <!--                        শ্রেণি-->
            <!--                    </option>-->
            <!--                </select>-->

            <!--                @error('sclass')-->
            <!--                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>-->
            <!--                @enderror-->
            <!--            </div>-->

                        <!-- ঠিকানা -->
            <!--            <div class="sm:col-span-2">-->
            <!--                <label for="address" class="block mb-2 text-sm font-medium text-gray-900">-->
            <!--                    ঠিকানা (বাংলায়)-->
            <!--                </label>-->
            <!--                <div class="grid gap-4 sm:grid-cols-2">-->
            <!--                    <div>-->
            <!--                        <input type="text" name="village" id="village" placeholder="গ্রাম/শহর"-->
            <!--                            value="{{ old('village') }}"-->
            <!--                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"-->
            <!--                            required>-->

            <!--                        @error('village')-->
            <!--                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>-->
            <!--                        @enderror-->
            <!--                    </div>-->
            <!--                    <div>-->
            <!--                        <input type="text" name="postoffice" id="postoffice" placeholder="ডাকঘর"-->
            <!--                            value="{{ old('postoffice') }}"-->
            <!--                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">-->

            <!--                        @error('postoffice')-->
            <!--                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>-->
            <!--                        @enderror-->
            <!--                    </div>-->

            <!--                    <div>-->
            <!--                        <input type="text" name="district" id="district" placeholder="জেলা"-->
            <!--                            value="{{ old('district') }}"-->
            <!--                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">-->

            <!--                        @error('district')-->
            <!--                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>-->
            <!--                        @enderror-->
            <!--                    </div>-->
            <!--                </div>-->


            <!--            </div>-->

                        <!-- ছবি -->
            <!--            <div class="sm:col-span-2">-->
            <!--                <label for="filename" class="block mb-2 text-sm font-medium text-gray-900">-->
            <!--                    ছবি-->
            <!--                </label>-->

            <!--                <div-->
            <!--                    class="flex flex-col sm:flex-row items-start sm:items-center space-y-4 sm:space-y-0 sm:space-x-4">-->
                                <!-- Upload File Input (Left) -->
            <!--                    <div class="sm:w-1/2">-->
            <!--                        <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">-->
            <!--                            ফাইল আপলোড করুন-->
            <!--                        </label>-->
            <!--                        <input type="file" id="file_input" accept="image/*" name="image"-->
            <!--                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none dark:text-gray-400"-->
            <!--                            onchange="previewImage(event)" required>-->
            <!--                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">-->
            <!--                            SVG, PNG, JPG, অথবা GIF (সর্বোচ্চ 400x400px).-->
            <!--                        </p>-->

            <!--                        @error('image')-->
            <!--                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>-->
            <!--                        @enderror-->
            <!--                    </div>-->

                                <!-- Preview Area (Right) -->
            <!--                    <div-->
            <!--                        class="w-full sm:w-1/2 flex justify-center items-center border border-gray-300 bg-gray-50 rounded-lg h-32">-->
            <!--                        <img id="preview" class="max-h-full max-w-full object-contain"-->
            <!--                            alt="Image preview" />-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->

            <!--            <script>-->
                            <!--// Preview Image Script-->
            <!--                function previewImage(event) {-->
            <!--                    const input = event.target;-->
            <!--                    const preview = document.getElementById('preview');-->
            <!--                    if (input.files && input.files[0]) {-->
            <!--                        const reader = new FileReader();-->
            <!--                        reader.onload = function(e) {-->
            <!--                            preview.src = e.target.result;-->
            <!--                        };-->
            <!--                        reader.readAsDataURL(input.files[0]);-->
            <!--                    } else {-->
                                    <!--preview.src = ''; // Clear preview if no file is selected-->
            <!--                    }-->
            <!--                }-->
            <!--            </script>-->
            <!--        </div>-->

            <!--        <div class="text-center">-->
            <!--            <button type="submit"-->
            <!--                class="text-center px-10 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-white-->
            <!--            bg-[#4CAF50] dark:bg-[#4CAF50]-->
            <!--            rounded-lg focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900-->
            <!--            hover:bg-[#4CAF50] dark:hover:bg-[#4CAF50]">-->
            <!--                সাবমিট-->
            <!--            </button>-->
            <!--        </div>-->


            <!--    </form>-->
            <!--</div>-->
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        // Preview Image Script
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('preview');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = ''; // Clear preview if no file is selected
            }
        }

        function validatePhoneNumber(input) {
            const message = document.getElementById('validation-message');
            // Remove any non-digit characters
            input.value = input.value.replace(/\D/g, '');

            // Check the length of the input
            const length = input.value.length;

            if (length > 11) {
                message.textContent = 'Phone number cannot exceed 11 digits.';
                message.style.color = 'red';
                input.value = input.value.slice(0, 11);
            } else if (length === 0) {
                message.textContent = '';
            } else if (length === 1 && input.value !== '0') {
                message.textContent = 'First digit must be 0.';
                message.style.color = 'red';
                input.value = ''; // Clear the input if the first digit is not 0
            } else if (length < 11) {
                message.textContent = 'Phone number must be exactly 11 digits.';
                message.style.color = 'red';
            } else if (length === 11) {
                if (input.value[0] !== '0') {
                    message.textContent = 'Phone number must start with 0.';
                    message.style.color = 'red';
                } else {
                    message.textContent = ''; // Clear message if valid
                }
            }
        }

        function validateForm(event) {
            const input = document.querySelector('input[name="phone"]');
            const message = document.getElementById('validation-message');
            if (input.value.length !== 11 || input.value[0] !== '0') {
                message.textContent = 'Phone number must be exactly 11 digits and start with 0 before submitting.';
                message.style.color = 'red';
                event.preventDefault(); // Prevent form submission
            }
        }

        document.getElementById('upazila_id').addEventListener('change', function() {
            const upazilaId = this.value;
            const schoolDropdown = document.getElementById('school_id');

            // Clear the existing options
            schoolDropdown.innerHTML = '<option value="">নির্বাচন করুন ...</option>';

            if (upazilaId) {
                // Fetch schools for the selected upazila
                fetch(`/get-schools/${upazilaId}`)
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(school => {
                            const option = document.createElement('option');
                            option.value = school.id;
                            option.textContent = school.school_name;
                            schoolDropdown.appendChild(option);
                        });
                    })
                    .catch(error => {
                        console.error('Error fetching schools:', error);
                    });
            }
        });
    </script>
@endsection
