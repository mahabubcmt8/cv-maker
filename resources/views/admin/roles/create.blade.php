@extends('admin.layouts.app', ['pageTitle' => $pageTitle])
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
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
                    <form action="{{ route('admin.roles.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-text bg-dark text-white" id="basic-addon11"><i class='bx bx-info-circle'></i></span>
                                    <input type="text" class="form-control" placeholder="Role Name *" name="name">
                                </div>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-4">
                            <!-- Select All -->
                            <div class="col-md-12">
                                <div class="form-check mt-3">
                                    <input class="form-check-input auto-select select-all" type="checkbox">
                                    <label class="form-check-label" for="defaultCheck1">Select All</label>
                                </div>
                            </div>
                            @foreach ($permissions as $item)
                                <!-- Item -->
                                <div class="col-md-2">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input auto-select" type="checkbox" name="permission[]" value="{{ $item->id }}"  id="defaultCheck{{ $item->id }}">
                                        <label class="form-check-label" for="defaultCheck1"> {{ $item->name }} </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row mt-5 justify-content-center">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary rounded-pill w-100">CREATE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        const selectAllCheckbox = document.querySelector('.select-all');
        const autoSelectCheckboxes = document.querySelectorAll('.auto-select');

        selectAllCheckbox.addEventListener('change', (event) => {
        autoSelectCheckboxes.forEach((checkbox) => {
            checkbox.checked = event.target.checked;
        });
        });
  </script>
@endpush
