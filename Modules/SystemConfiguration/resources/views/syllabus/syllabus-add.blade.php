@extends('layouts.backend')

@section('page_title_breadcrumb')
    {{ _lang('Syllabus') }}
@endsection

@section('create-button-2')
    <a class="btn btn-sm fw-bold btn-primary" href="{{ route('syllabus.index') }}">
        {{ _lang('Syllabus List') }}
    </a>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('syllabus.store') }}" enctype="multipart/form-data"method="post">
                @csrf
                <div class="form-group">
                    <label class="control-label my-2">{{ _lang('Class') }}</label>

                    <select class="form-select form-select-sm form-select-solid" data-control="select2" name="sclass">
                        <option value="">-- Select Class --</option>
                        <option value="১ম শ্রেণি" {{ old('sclass') == '১ম শ্রেণি' ? 'selected' : '' }}>১ম শ্রেণি
                        </option>
                        <option value="২য় শ্রেণি" {{ old('sclass') == '২য় শ্রেণি' ? 'selected' : '' }}>২য় শ্রেণি
                        </option>
                        <option value="৩য় শ্রেণি" {{ old('sclass') == '৩য় শ্রেণি' ? 'selected' : '' }}>৩য় শ্রেণি
                        </option>
                        <option value="৪র্থ শ্রেণি" {{ old('sclass') == '৪র্থ শ্রেণি' ? 'selected' : '' }}>৪র্থ শ্রেণি
                        </option>
                        <option value="সংগঠনের কার্যক্রম তথ্যি" {{ old('sclass') == 'সংগঠনের কার্যক্রম তথ্য' ? 'selected' : '' }}>সংগঠনের কার্যক্রম তথ্য 
                        </option>
                        <option value="৬ষ্ঠ শ্রেণি" {{ old('sclass') == '৬ষ্ঠ শ্রেণি' ? 'selected' : '' }}>৬ষ্ঠ শ্রেণি
                        </option>
                        <option value="৭ম শ্রেণি" {{ old('sclass') == '৭ম শ্রেণি' ? 'selected' : '' }}>৭ম শ্রেণি
                        </option>
                        <option value="৮ম শ্রেণি" {{ old('sclass') == '৮ম শ্রেণি' ? 'selected' : '' }}>৮ম শ্রেণি
                        </option>
                        <option value="৯ম শ্রেণি" {{ old('sclass') == '৯ম শ্রেণি' ? 'selected' : '' }}>৯ম শ্রেণি
                        </option>
                        <option value="১০ম শ্রেণি" {{ old('sclass') == '৯ম শ্রেণি' ? 'selected' : '' }}>১০ম শ্রেণি
                        </option>
                    </select>

                </div>

                <div class="form-group">
                    <label class="control-label my-2">{{ _lang('Title') }}</label>
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}"
                        placeholder="Title" required>
                </div>
                <div class="form-group">
                    <label class="control-label my-2">{{ _lang('Description') }}</label>
                    <textarea id="summernote" class="form-control" name="description" cols="4" rows="6"
                        placeholder="Description">{{ old('description') }}</textarea>
                </div>


                <div class="form-group">
                    <label class="control-label my-2">{{ _lang('File') }}</label>
                    <input type="file" class="form-control" name="file" required>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                        <button type="submit" class="btn btn-primary mt-5">{{ _lang('Create Syllabus') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
