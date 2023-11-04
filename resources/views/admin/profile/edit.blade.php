@extends('admin.layouts.app', ['pageTitle' => 'Admin Profile'])
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-info">
                    <strong>Edit Admin Profile</strong>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.updateProfile',$admin->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label class="mb-2">Name <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11"><i class="bx bx-info-circle"></i></span>
                                <input type="text" class="form-control" placeholder="Name" value="{{ $admin->name ?? old('name') }}" name="name">
                            </div>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="mb-2">Username <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11"><i class="bx bx-info-circle"></i></span>
                                <input type="text" class="form-control" placeholder="Username" value="{{ $admin->username ?? old('username') }}" name="username">
                            </div>
                            @error('username')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mt-3">
                            <label class="mb-2">Email <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11"><i class="bx bx-info-circle"></i></span>
                                <input type="text" class="form-control" placeholder="Email" value="{{ $admin->email ?? old('email') }}" name="email">
                            </div>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mt-3">
                            <label class="mb-2">Phone<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11"><i class="bx bx-info-circle"></i></span>
                                <input type="text" class="form-control" placeholder="Phone" value="{{ $admin->phone ?? old('phone') }}" name="phone">
                            </div>
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mt-3">
                            <label class="mb-2">Address</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11"><i class="bx bx-info-circle"></i></span>
                                <textarea name="address" class="form-control" placeholder="Address">{{ $admin->address ?? old('address') }}</textarea>
                            </div>
                            @error('address')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mt-3">
                            <label class="mb-2">Picture</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11"><i class="bx bx-info-circle"></i></span>
                                <input type="file" name="picture" class="form-control" >
                            </div>
                            @error('picture')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-12 mt-5 text-center">
                            <button type="submt" class="btn btn-primary rounded-pill btn-lg">SUBMIT</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
