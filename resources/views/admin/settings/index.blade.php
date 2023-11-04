@extends('admin.layouts.app', ['pageTitle' => 'Update your website settings'])
@section('content')
<form action="{{ route('admin.settings.update',$settings->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="alert alert-danger text-center" role="alert"><strong>Website Settings</strong></div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-primary"><strong>Basic Settings</strong></div>
                <div class="card-body">
                    <div class="col-12">
                        <label class="mb-1">Title</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class='bx bx-info-circle'></i></span>
                            <input type="text" class="form-control" placeholder="Site Title" value="{{ $settings->title ?? old('title') }}" name="title">
                        </div>
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label class="mb-1">Sitename</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class='bx bx-info-circle'></i></span>
                            <input type="text" class="form-control" placeholder="Site Name" value="{{ $settings->sitename ?? old('sitename') }}" name="sitename">
                        </div>
                        @error('sitename')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label class="mb-1">Email</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class='bx bx-info-circle'></i></span>
                            <input type="email" class="form-control" placeholder="Email" value="{{ $settings->email ?? old('email') }}" name="email">
                        </div>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label class="mb-1">Phone</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class='bx bx-info-circle'></i></span>
                            <input type="text" class="form-control" placeholder="Phone" value="{{ $settings->phone ?? old('phone') }}" name="phone">
                        </div>
                        @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label class="mb-1">Currency</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class='bx bx-info-circle'></i></span>
                            <input type="text" class="form-control" placeholder="Currency" value="{{ $settings->currency ?? old('currency') }}" name="currency">
                        </div>
                        @error('currency')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label class="mb-1">Currency Symbol</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class='bx bx-info-circle'></i></span>
                            <input type="text" class="form-control" placeholder="Currency Symbol" value="{{ $settings->currency_symbol ?? old('currency_symbol') }}" name="currency_symbol">
                        </div>
                        @error('currency_symbol')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label class="mb-1">Country Code</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class='bx bx-info-circle'></i></span>
                            <input type="text" class="form-control" placeholder="Country Code" value="{{ $settings->country_code ?? old('country_code') }}" name="country_code">
                        </div>
                        @error('country_code')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label class="mb-1">Address</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class='bx bx-info-circle'></i></span>
                            <textarea name="address" class="form-control">{{ $settings->address ?? old('address') }}</textarea>
                        </div>
                        @error('address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label class="mb-1">Status</label>
                        <select class="form-select" name="status">
                            <option>-- Choose Status --</option>
                            <option value="1" {{ $settings->status == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $settings->status == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                        @error('status')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-primary">
                    <strong>Social Settings</strong>
                </div>
                <div class="card-body">
                    <div class="col-12">
                        <label class="mb-1">Facebook</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class='bx bx-info-circle'></i></span>
                            <input type="text" class="form-control" placeholder="Facebook" value="{{ $settings->facebook ?? old('facebook') }}" name="facebook">
                        </div>
                        @error('facebook')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label class="mb-1">Twitter</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class='bx bx-info-circle'></i></span>
                            <input type="text" class="form-control" placeholder="Twitter" value="{{ $settings->twitter ?? old('twitter') }}" name="twitter">
                        </div>
                        @error('twitter')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label class="mb-1">Linkedin</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class='bx bx-info-circle'></i></span>
                            <input type="text" class="form-control" placeholder="Linkedin" value="{{ $settings->linkedin ?? old('linkedin') }}" name="linkedin">
                        </div>
                        @error('linkedin')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label class="mb-1">Instagram</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class='bx bx-info-circle'></i></span>
                            <input type="text" class="form-control" placeholder="Instagram" value="{{ $settings->instagram ?? old('instagram') }}" name="instagram">
                        </div>
                        @error('instagram')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label class="mb-1">Youtube</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class='bx bx-info-circle'></i></span>
                            <input type="text" class="form-control" placeholder="Youtube" value="{{ $settings->youtube ?? old('youtube') }}" name="youtube">
                        </div>
                        @error('youtube')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label class="mb-1">Pinterest</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class='bx bx-info-circle'></i></span>
                            <input type="text" class="form-control" placeholder="Pinterest" value="{{ $settings->pinterest ?? old('pinterest') }}" name="pinterest">
                        </div>
                        @error('pinterest')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header text-primary">
                    <strong>Logo & Icon</strong>
                </div>
                <div class="card-body">
                    <div class="col-12">
                        <label class="mb-1">Logo</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class='bx bx-info-circle'></i></span>
                            <input type="file" class="form-control" name="logo">
                        </div>
                        @error('logo')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label class="mb-1">Icon</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class='bx bx-info-circle'></i></span>
                            <input type="file" class="form-control" name="icon">
                        </div>
                        @error('icon')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="d-grid gap-2 col-lg-6 mx-auto">
            <button type="submit" class="btn btn-primary btn-block rounded-pill">SUBMIT</button>
        </div>
    </div>
</form>
@endsection
