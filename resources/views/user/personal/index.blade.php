@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h5>
                            <strong>
                                Upgrade your personal information
                            </strong>
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="my-2">
                                        <strong>Full Name: <span class="text-danger">*</span></strong>
                                    </label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                        <input type="text" class="form-control" name="full_name" value="{{ $user->name ?? '' }}" placeholder="Enter Full name">
                                    </div>
                                    @error('full_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label class="my-2">
                                        <strong>Father's Name: <span class="text-danger">*</span></strong>
                                    </label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                        <input type="text" class="form-control" name="fathers_name" value="{{ $user->fathers_name ?? '' }}" placeholder="Enter Father's name">
                                    </div>
                                    @error('fathers_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label class="my-2">
                                        <strong>Mother's Name: <span class="text-danger">*</span></strong>
                                    </label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                        <input type="text" class="form-control" name="mothers_name" value="{{ $user->mothers_name ?? '' }}" placeholder="Enter Mother's name">
                                    </div>
                                    @error('mothers_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label class="my-2">
                                        <strong>Date Of Birth: <span class="text-danger">*</span></strong>
                                    </label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-calendar-days"></i></span>
                                        <input type="date" class="form-control" name="dob" value="{{ $user->dob ?? '' }}" placeholder="Enter Father's name">
                                    </div>
                                    @error('dob')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label class="my-2">
                                        <strong>Phone Number: <span class="text-danger">*</span></strong>
                                    </label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><strong>+88</strong></span>
                                        <input type="number" class="form-control" name="phone" value="{{ $user->phone ?? '' }}" placeholder="Enter Phone number">
                                    </div>
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label class="my-2">
                                        <strong>Alternative Phone: <span class="text-danger">*</span></strong>
                                    </label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><strong>+88</strong></span>
                                        <input type="number" class="form-control" name="alt_phone" value="{{ $user->alt_phone ?? '' }}" placeholder="Enter Altenative phone">
                                    </div>
                                    @error('alt_phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label class="my-2">
                                        <strong>Email: <span class="text-danger">*</span></strong>
                                    </label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                                        <input type="email" class="form-control" name="email" value="{{ $user->email ?? '' }}" placeholder="Enter Email">
                                    </div>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label class="my-2">
                                        <strong>Alternative Email: <span class="text-danger">*</span></strong>
                                    </label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                                        <input type="email" class="form-control" name="alt_email" value="{{ $user->alt_email ?? '' }}" placeholder="Enter Altenative email">
                                    </div>
                                    @error('alt_email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label class="my-2">
                                        <strong>Gender: <span class="text-danger">*</span></strong>
                                    </label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-circle"></i></span>
                                        <select name="gender" class="form-select">
                                            <option value="">-- Select Gender --</option>
                                            <option value="Male" {{ $user->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                            <option value="Female" {{ $user->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                            <option value="Others" {{ $user->gender == 'Others' ? 'selected' : '' }}>Others</option>
                                        </select>
                                    </div>
                                    @error('alt_email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label class="my-2">
                                        <strong>Religion: <span class="text-danger">*</span></strong>
                                    </label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                                        <input type="text" class="form-control" name="religion" value="{{ $user->religion ?? '' }}" placeholder="Religion">
                                    </div>
                                    @error('religion')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="my-2">
                                        <strong>Nationality: <span class="text-danger">*</span></strong>
                                    </label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                                        <input type="text" class="form-control" name="nationality" value="{{ $user->nationality ?? '' }}" placeholder="Nationality">
                                    </div>
                                    @error('nationality')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label class="my-2">
                                        <strong>Marital status: <span class="text-danger">*</span></strong>
                                    </label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                                        <input type="text" class="form-control" name="marital_status" value="{{ $user->marital_status ?? '' }}" placeholder="Marital status">
                                    </div>
                                    @error('marital_status')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
