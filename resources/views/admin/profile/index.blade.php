@extends('admin.layouts.app', ['pageTitle' => 'Admin Profile'])
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header text-info">
                    <strong>Admin Profile</strong>
                </div>
                <div class="card-body">
                    <div class="demo-inline-spacing mt-3">
                        <ul class="list-group">
                          <li class="list-group-item d-flex align-items-center">
                            <i class="bx bx-tv me-2"></i>
                            <strong>Name: </strong>&nbsp; {{ $admin->name }}
                          </li>
                          <li class="list-group-item d-flex align-items-center">
                            <i class="bx bx-bell me-2"></i>
                            <strong>Username: </strong>&nbsp; {{ $admin->username }}
                          </li>
                          <li class="list-group-item d-flex align-items-center">
                            <i class="bx bx-support me-2"></i>
                            <strong>Email: </strong>&nbsp; {{ $admin->email }}
                          </li>
                          <li class="list-group-item d-flex align-items-center">
                            <i class="bx bx-purchase-tag-alt me-2"></i>
                            <strong>Phone: </strong>&nbsp; {{ $admin->phone }}
                          </li>
                          <li class="list-group-item d-flex align-items-center">
                            <i class="bx bx-closet me-2"></i>
                            <strong>Address: </strong>&nbsp; {{ $admin->address }}
                          </li>
                        </ul>
                      </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ asset('storage/admin/' . $admin->picture) }}" alt="Admin Profile Picture" class="img-fluid mb-4">
                        <a href="{{ route('admin.editProfile',auth()->guard('admin')->user()->id) }}" class="btn btn-primary">Edit Profile</a>
                        <a href="{{ route('admin.changePass',auth()->guard('admin')->user()->id) }}" class="btn btn-primary">Change Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
