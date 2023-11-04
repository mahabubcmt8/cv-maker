@extends('admin.layouts.app', ['pageTitle' => $pageTitle])
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h5 class="text-primary float-left mt-1">
                                <strong>{{ $pageTitle ?? ''}}</strong>
                            </h5>
                        </div>
                        <div class="col-6">
                            <a href="{{ route('admin.roles.index') }}" class="btn btn-primary float-right">Roles</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="alert alert-danger"><strong>Role Name: {{ $role->name }}</strong></div>
                    <h5>Permissions:</h5>
                    <div class="permissions mt-4">
                        @foreach ($role->permissions as $item)
                            <span class="badge bg-info">{{ $item->name }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
