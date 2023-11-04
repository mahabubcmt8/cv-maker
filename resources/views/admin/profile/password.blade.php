@extends('admin.layouts.app', ['pageTitle' => 'Admin Change Password Profile'])
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header text-info">
                    <strong>Admin Password Change</strong>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.updatePass',Auth::guard('admin')->user()->id) }}" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label class="mb-2">Current Password <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon11"><i class="bx bx-info-circle"></i></span>
                                    <input type="password" class="form-control" placeholder="********" name="current_password">
                                </div>
                                @error('current_password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="mb-2">New Password <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon11"><i class="bx bx-info-circle"></i></span>
                                    <input type="password" class="form-control" placeholder="********" name="new_password">
                                </div>
                                @error('new_password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="mb-2">Re-type Password <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon11"><i class="bx bx-info-circle"></i></span>
                                    <input type="password" class="form-control" placeholder="********" name="confirm_password">
                                </div>
                                @error('confirm_password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-4 text-center">
                            <div class="col-12">
                                <button type="submt" class="btn btn-primary rounded-pill">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
