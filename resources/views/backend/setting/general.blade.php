@extends('layouts.backend')

@section('page_title_breadcrumb')
    {{ __($title) }}
@endsection


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('admin.setting.add.update.general.info') }}" enctype="multipart/form-data" method="post">
                @csrf

                <div class="row">
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <!-- Title -->
                        <div class="sm:col-span-2">
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                {{ __('Title') }}
                            </label>
                            <input 
                                type="text" 
                                name="title" 
                                id="title" 
                                placeholder="{{ __('Enter title') }}" 
                                value="{{ old('title', $dataInfo->title ?? " ") }}" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">
                            @error('title')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Logo -->
                        <div>
                            <label for="logo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                {{ __('Logo') }}
                            </label>

                            <img id="blah" src="{{ asset($dataInfo->logo ?? 'http://placehold.it/180') }}" alt="Logo" style="height: 100px; width: 100px;margin-bottom:15px" />
                            <input type="file" name="logo" class="block w-full px-3 py-2 text-gray-700 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300 focus:border-blue-500"  onchange="readURL(this);"  />
                            @error('logo') <small class="text-danger">{{ $message }}</small> @enderror
                      
                        </div>

                        <!-- FavIcon -->
                        <div>
                            <label for="favIcon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                {{ __('FavIcon') }}
                            </label>

                            <img id="blah" src="{{ asset($dataInfo->favIcon ?? 'http://placehold.it/180') }}" alt="Logo" style="height: 100px; width: 100px;margin-bottom:15px" />
                                <input type="file" name="favIcon" class="block w-full px-3 py-2 text-gray-700 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300 focus:border-blue-500"  onchange="readURL(this);"  />
                                @error('favIcon') <small class="text-danger">{{ $message }}</small> @enderror
                          
                        </div>

                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                {{ __('Phone') }}
                            </label>
                            <input 
                                type="text" 
                                name="phone" 
                                id="phone" 
                                placeholder="{{ __('Enter phone number') }}" 
                                minlength="11" 
                                maxlength="11" 
                                value="{{ old('phone', $dataInfo->phone ?? "") }}" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">
                            @error('phone')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div >
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                {{ __('Email') }}
                            </label>
                            <input 
                                type="email" 
                                name="email" 
                                id="email" 
                                placeholder="{{ __('Enter email') }}" 
                                value="{{ old('email', $dataInfo->email ?? " ") }}" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:text-white">
                            @error('email')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div >
                            <label>Address</label>
                            <textarea 
                            type="text" 
                            name="address" 
                            class="block w-full px-3 py-2 text-left text-gray-700 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300 focus:border-blue-500">
                            {{ old('address', $dataInfo->address ?? " ") }}
                        </textarea>
                        
                            @error('address') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <label>About Blood</label>
                   
                    <textarea type="text" name="blood_hsitory" class="summernote block w-full px-3 py-2 text-gray-700 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300 focus:border-blue-500"  >

                        {!! old('blood_hsitory', $dataInfo->blood_hsitory ?? " ") !!}
                    </textarea>
                    @error('blood_hsitory') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
