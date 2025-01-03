@if(empty($data->id))

<div class="modal fade" id="addRowModal" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
@else 
<div class="modal fade" id="editRowModal{{ $data->id }}"  tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
@endif


<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
                @if(empty($data->id))  {{ $addTitle }} @else {{ $editTitle}}  @endif
                
                </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <form id="myForm"  method="POST"
        @if(empty($data->id)) action="{{route('admin.member.add.update.info')}}" @else action="{{route('admin.member.add.update.info',$data->id)}}"  @endif   enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="card-body">
                    <div class="row">

                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                          
                            <!-- Phone -->
                            <div>
                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    {{ __('Name') }}
                                </label>
                                <input 
                                    type="text" 
                                    name="name" 
                                    id="name" 
                                    placeholder="{{ __('Enter name number') }}" 
                                 
                                    value="{{ old('name', $data->name ?? "") }}" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">
                                @error('name')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
    
                            <!-- Email -->
                            <div >
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    {{ __('Phone') }}
                                </label>
                                <input 
                                    type="text" 
                                    name="phone" 
                                    id="phone" 
                                    placeholder="{{ __('Enter phone') }}" 
                                    value="{{ old('phone', $data->phone ?? " ") }}" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">
                                @error('phone')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div >
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    {{ __('Emergency Contact Number') }}
                                </label>
                                <input 
                                    type="text" 
                                    name="em_phone" 
                                    id="em_phone" 
                                    placeholder="{{ __('Enter em_phone') }}" 
                                    value="{{ old('em_phone', $data->em_phone ?? " ") }}" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">
                                @error('em_phone')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div >
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    {{ __('Email') }}
                                </label>
                                <input 
                                    type="email" 
                                    name="email" 
                                    id="email" 
                                    placeholder="{{ __('Enter email') }}" 
                                    value="{{ old('email', $data->email ?? " ") }}" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">
                                @error('email')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div >
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    {{ __('Facebook Link') }}
                                </label>
                                <input 
                                    type="url" 
                                    name="fbLink" 
                                    id="fbLink" 
                                    placeholder="{{ __('Enter facebook Link') }}" 
                                    value="{{ old('fbLink', $data->fbLink ?? " ") }}" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">
                                @error('fbLink')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div >
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    {{ __('NID') }}
                                </label>
                                <input 
                                    type="text" 
                                    name="nid" 
                                    id="nid" 
                                    placeholder="{{ __('Enter nid') }}" 
                                    value="{{ old('nid', $data->nid ?? " ") }}" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">
                                @error('nid')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div >
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    {{ __('Education Information') }}
                                </label>
                                <input 
                                    type="text" 
                                    name="education" 
                                    id="education" 
                                    placeholder="{{ __('Enter Education Info') }}" 
                                    value="{{ old('education', $data->education ?? " ") }}" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">
                                @error('education')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div >
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    {{ __('Occupation') }}
                                </label>
                                <input 
                                    type="text" 
                                    name="occupation" 
                                    id="occupation" 
                                    placeholder="{{ __('Enter Occupation') }}" 
                                    value="{{ old('occupation', $data->occupation ?? " ") }}" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">
                                @error('occupation')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div >
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    {{ __('Voluntary') }}
                                </label>
                                <input 
                                    type="text" 
                                    name="voluntary" 
                                    id="voluntary" 
                                    placeholder="{{ __('Enter Type of  Voluntary') }}" 
                                    value="{{ old('voluntary', $data->voluntary ?? " ") }}" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">
                                @error('voluntary')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div >
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    {{ __('Skill') }}
                                </label>
                                <input 
                                    type="text" 
                                    name="skill" 
                                    id="skill" 
                                    placeholder="{{ __('Enter skill') }}" 
                                    value="{{ old('skill', $data->skill ?? " ") }}" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">
                                @error('skill')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div >
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    {{ __('Parmanent Address') }}
                                </label>
                                <textarea 
                                  
                                    name="address" 
                                    id="address" 
                                    placeholder="{{ __('Enter address') }}" 
                                    value="{{ old('address', $data->address ?? " ") }}" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">
                                    {{ old('address', $data->address ?? " ") }}
                                </textarea>
                                @error('address')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div >
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    {{ __('Present Address') }}
                                </label>
                                <textarea 
                              
                                    name="pAddress" 
                                    id="pAddress" 
                                    placeholder="{{ __('Enter Present Address') }}" 
                                    value="{{ old('pAddress', $data->pAddress ?? " ") }}" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">

                                    {{ old('pAddress', $data->pAddress ?? " ") }}</textarea>
                                @error('pAddress')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                           
                        </div>
                        <!-- Left Column -->
                        <div >
                            <label for="email" class="block mb-2 mt-5 text-sm font-medium text-gray-900 dark:text-white">
                                {{ __('Member Type') }}
                            </label>
                           <!-- Member Type Radios -->

                           <select class="form-select" name="member_type" aria-label="Default select example">
                    
                            <option value="1" {{ old('member_type', $data->member_type ?? '') == 1 ? 'selected' : '' }} >কার্য নির্বাহী কমিটি</option>
                            <option value="2" {{ old('member_type', $data->member_type ?? '') == 2 ? 'selected' : '' }} >সদস্য</option>
                            <option value="3" {{ old('member_type', $data->member_type ?? '') == 3 ? 'selected' : '' }} >স্বেচ্ছাসেবক</option>
                            <option value="4" {{ old('member_type', $data->member_type ?? '') == 4 ? 'selected' : '' }} >উপদেষ্টা</option>
                            <option value="5" {{ old('member_type', $data->member_type ?? '') == 5 ? 'selected' : '' }} >পরামর্শক</option>
                          </select>
                            
                            @error('member_type')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">
                    @if(empty($data->id))  <span>Submit</span> @else <span>Update</span>  @endif
                </button>
            </div>
        </form>
    </div>
</div>
</div>

<script>
    // Show the appropriate modal on validation errors
  
</script>


