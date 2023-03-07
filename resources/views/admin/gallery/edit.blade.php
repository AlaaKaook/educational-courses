@extends('admin_layouts.admin_layout')

@section('title', ' Update Gallery')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('admin.settings.index') }}">Gallery</a></li>
                    <li class="breadcrumb-item"><a href="#">Update Gallery</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Update Gallery</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="needs-validation" novalidate=""
                                    action="{{ route('admin.galleries.update', $gallery) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">

                                        <div class="col-xl-6">

                                            <div class="row">
                                                <div class="col-xl-6 col-xxl-6 col-6">
                                                    <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                        <input type="checkbox" name="active" class="form-check-input" id="customCheckBox2"  {{ $gallery->active == '1' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="customCheckBox2">Active</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="input-group mb-3 mt-4">
                                            <label class="col-lg-2 col-form-label" for="validationdescription">Select
                                                Image
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9 form-file">
                                                <input type="file" name="filename" class="form-file-input form-control">
                                            </div>
                                            <span class="input-group-text">Upload</span>
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
