@extends('admin.layouts.app', ['pageTitle' => $pageTitle])
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h5 class="text-primary float-left mt-1">
                                <strong>{{ $pageTitle ?? '' }}</strong>
                            </h5>
                        </div>
                        <div class="col-6">
                            <a href="{{ route('admin.roles.create') }}" class="btn btn-primary float-right">Create</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead class="bg-dark">
                                <th class="text-white text-center">#</th>
                                <th class="text-white text-center">Name</th>
                                <th class="text-white text-center">Total Permission</th>
                                <th class="text-white text-center">Action</th>
                            </thead>
                            <tbody>
                                @if (count($roles) >= 1)
                                    @foreach ($roles as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td><span class="badge bg-info">{{ count($row->permissions) }}</span></td>
                                            <td>
                                                <a href="{{ route('admin.roles.show', $row->id) }}"
                                                    class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Show">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.roles.edit', $row->id) }}"
                                                    class="btn btn-warning btn-sm" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Edit">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="javascript:$('#deleteForm').submit();" type="submit"
                                                    class="btn btn-danger btn-sm" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Delete"
                                                    onclick="return confirm('Are you sure delete this Role??')">
                                                    <i class="fa-sharp fa-solid fa-trash"></i>
                                                </a>
                                                <form action="{{ route('admin.roles.destroy', $row->id) }}" method="post"
                                                    id="deleteForm">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                <tr>
                                    <td colspan="4">
                                        <img src="{{ asset('backend/img/no-results.png') }}" alt="">
                                        <p><strong>No information was found in the database</strong></p>
                                    </td>
                                </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
