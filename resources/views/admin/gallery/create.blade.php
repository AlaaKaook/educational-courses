@extends('admin_layouts.admin_layout')

@section('title', ' Gallery')

@section('content')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('admin.galleries.index') }}">Gallery</a></li>
                    <li class="breadcrumb-item"><a href="#">Create New Image</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Image</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form method="post" action="{{ route('admin.upload.images') }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="input-group mt-4 increment">
                                            <label class="col-lg-2 col-form-label" for="validationfile">Select
                                                image
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9 form-file ">
                                                <input type="file" name="filename[]"
                                                    class="form-file-input form-control">
                                            </div>
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-primary btn-square"><span
                                                        class="btn-icon-start text-primary"><i
                                                            class="fa fa-plus color-primary"></i>
                                                    </span>Add</button>
                                            </div>
                                            {{-- <span class="input-group-text">Upload</span> --}}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="clone invisible">
                                            <div class="control-group input-group" style="margin-top:10px">
                                                <label class="col-lg-2 col-form-label" for="validationfile">Select
                                                    image
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-9 form-file ">
                                                    <input type="file" name="filename[]" class="form-control">
                                                </div>
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-danger btn-square"><span
                                                            class="btn-icon-start text-danger">X
                                                        </span>Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>

                            <div class="row">
                                <div class="mb-3 row">
                                    <div class="col-lg-8 ms-auto">
                                        <button type="submit" class="btn btn-outline-primary">Submit</button>
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

    <script type="text/javascript">
        $(document).ready(function() {

            $(".btn-primary").click(function() {
                var html = $(".clone").html();
                $(".increment").after(html);
            });

            $("body").on("click", ".btn-danger", function() {
                $(this).parents(".control-group").remove();
            });

        });
    </script>
@endsection
