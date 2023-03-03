@extends('admin_layouts.admin_layout')

@section('title', ' Update Settings')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('admin.settings.index') }}">Settings</a></li>
                    <li class="breadcrumb-item"><a href="#">Update Settings Informations</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Update Settings</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="needs-validation" novalidate=""
                                    action="{{ route('admin.settings.update', $setting) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="mb-3 row">
                                                <label class="col-lg-2 col-form-label" for="validationphone">Phone<span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="phone"
                                                        class="form-control @error('phone') is-danger @enderror"
                                                        id="validationphone" placeholder="Your valid phone.."
                                                        required=""  value="{{ $setting->phone }}">
                                                    <div class="invalid-feedback">
                                                        Please enter a phone.
                                                    </div>
                                                    @error('phone')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-lg-2 col-form-label" for="validationEmail">Email <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="email"
                                                        class="form-control @error('email') is-danger @enderror"
                                                        id="validationEmail" placeholder="Your valid email.."
                                                        required="" value="{{ $setting->email }}">
                                                    <div class="invalid-feedback">
                                                        Please enter a Email.
                                                    </div>
                                                    @error('email')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-lg-2 col-form-label" for="validationlogoname">Logo Name<span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="logo_name"
                                                        class="form-control @error('logo_name') is-danger @enderror"
                                                        id="validationlogoname" placeholder="Your valid LOGO Name.."
                                                        required=""  value="{{ $setting->logo_name }}">
                                                    <div class="invalid-feedback">
                                                        Please enter a logo name.
                                                    </div>
                                                    @error('logo_name')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-lg-2 col-form-label" for="validationlogoname">Location<span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="location"
                                                        class="form-control @error('location') is-danger @enderror"
                                                        id="validationlogoname" placeholder="Your valid Location.."
                                                        required=""  value="{{ $setting->location }}">
                                                    <div class="invalid-feedback">
                                                        Please enter a Location.
                                                    </div>
                                                    @error('location')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-lg-2 col-form-label" for="validationAbout">About
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-9">
                                                    <textarea name="about" id="validationAbout" class="form-control3 @error('about') is-danger @enderror" rows="33"> {{ $setting->about }}</textarea>
                                                    @error('about')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-lg-2 col-form-label" for="validationsearch">Search
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-9">
                                                    <textarea name="search" id="validationsearch" class="form-control3 @error('search') is-danger @enderror" rows="33">{{ $setting->search }}</textarea>
                                                    @error('search')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="row">
                                            <div class="input-group mb-3 mt-4">
                                                <label class="col-lg-2 col-form-label" for="validationdescription">Select
                                                    Logo
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-9 form-file">
                                                    <input type="file" name="logo"
                                                        class="form-file-input form-control">
                                                </div>
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="row">
                                            <div class="input-group mb-3 mt-4">
                                                <label class="col-lg-2 col-form-label" for="validationdescription">Select
                                                    image About
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-9 form-file">
                                                    <input type="file" name="about_image"
                                                        class="form-file-input form-control">
                                                </div>
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="mb-3 row">
                                            <div class="col-lg-8 ms-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="submit" class="btn btn-light">cencel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
