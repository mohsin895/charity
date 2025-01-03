@extends('layouts.backend')

@section('page_title_breadcrumb')
    {{ __($title) }}
@endsection



@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('admin.setting.email.add.update.info') }}" enctype="multipart/form-data" method="post">
                @csrf

                <div class="row">
                 
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label"> DRIVER *</label>
                            <input type="text" class="form-control" name="driver" value="{{ old('driver', $dataInfo->driver ?? '') }}">
                            @error('driver') <small class="text-danger">{{ $message }}</small> @enderror
                        
                        </div>
                       
                       
                        <div class="mb-4">
                            <label class="form-label">PORT *</label>
                            <input type="text" class="form-control" name="port" value="{{ old('port', $dataInfo->port ?? '') }}">
                            @error('port') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label">PASSWORD *</label>
                            <input type="text" class="form-control" name="password" value="{{ old('password', $dataInfo->password ?? '') }}">
                            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Sender Name *</label>
                            <input type="text" class="form-control" name="sender_name" value="{{ old('sender_name', $dataInfo->sender_name ?? '') }}">
                            @error('sender_name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                      
                       
                    </div>

                    <div class="col-md-6">
                       
                        <div class="mb-4">
                            <label class="form-label">HOST *</label>
                            <input type="text" class="form-control" name="host" value="{{ old('host', $dataInfo->host ?? '') }}">
                            @error('host') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label">USERNAME *</label>
                            <input type="text" class="form-control" name="user_name" value="{{ old('user_name', $dataInfo->user_name ?? '') }}">
                            @error('user_name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Sender Email *</label>
                            <input type="text" class="form-control" name="sender_email" value="{{ old('sender_email', $dataInfo->sender_email ?? '') }}">
                            @error('sender_email') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-4">
                            <label class="form-label">ENCRYPTION*</label>
                            <input type="text" class="form-control" name="encryption" value="{{ old('encryption', $dataInfo->encryption ?? '') }}">
                            @error('encryption') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                       
                    </div>
                   
                </div>
                <div class="mb-4 text-end">
                    <label class="form-label"></label>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
