@extends('admin_layouts.admin_layout')

@section('title', ' Update Slider')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('admin.sliders.index') }}">Sliders</a></li>
                    <li class="breadcrumb-item"><a href="#">Update Slider Informations</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Update Slider</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="needs-validation" novalidate=""
                                    action="{{ route('admin.sliders.update', $slider) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="mb-3 row">
                                                <label class="col-lg-2 col-form-label" for="validationfirstname">Title
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="title"
                                                        class="form-control @error('title') is-danger @enderror"
                                                        id="validationfirstname" placeholder="Enter a First Name.."
                                                        required="" value="{{ $slider->title }}">
                                                    <div class="invalid-feedback">
                                                        Please enter a Title.
                                                    </div>
                                                    @error('title')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="mb-3 mt-5 row">
                                                <label class="col-lg-2 col-form-label" for="validationactive">Active
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8">
                                                    <label class="form-check-label">
                                                        Active
                                                    </label>
                                                    <input class="form-check-input @error('active') is-danger @enderror"
                                                        type="radio" name="active" value="1" {{ $slider->active == '1' ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        Not Active
                                                    </label>
                                                    <input class="form-check-input @error('active') is-danger @enderror"
                                                        type="radio" name="active" value="0" {{ $slider->active == '0' ? 'checked' : '' }}>
                                                    <div class="invalid-feedback">
                                                        Please enter a active.
                                                    </div>
                                                    @error('active')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>



                                        </div>


                                        <div class="row">

                                            <div class="row">
                                                <div class="input-group mb-3 mt-4">
                                                    <label class="col-lg-2 col-form-label"
                                                        for="validationdescription">Slider Image
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-9 form-file">
                                                        <input type="file" name="image"
                                                            class="form-file-input form-control">
                                                    </div>
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row mt-4">
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
