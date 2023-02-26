@extends('admin_layouts.admin_layout')

@section('title', ' Create New Lesson')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('admin.lessons.index') }}">Lessons</a></li>
                    <li class="breadcrumb-item"><a href="#">Create New Lesson</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Lesson</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="needs-validation" novalidate="" action="{{ route('admin.lessons_youtube.store') }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf


                                    <div class="row">

                                        <div class="col-xl-6">

                                            <div class="mb-3 row mt-4">
                                                <label class="col-lg-3 col-form-label" for="validationName">Name <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8">
                                                    <input type="text" name="name"
                                                        class="form-control @error('name') is-danger @enderror"
                                                        id="validationName" placeholder="Enter Name Course.." required=""
                                                        value="{{ old('name') }}">
                                                    <div class="invalid-feedback">
                                                        Please enter a Name.
                                                    </div>
                                                    @error('name')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 mt-5 row">
                                                <label class="col-lg-3 col-form-label" for="validationdescription">Description
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-9">
                                                    <textarea name="description" class="form-control3" rows="33" cols="125"></textarea>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-xl-6">

                                            <div class="mb-3 mt-4 row">
                                                <label class="col-lg-3 col-form-label" for="validationCourse">Course
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8">
                                                    <select name="course_id" class="form-select form-select-lg mb-3"
                                                        aria-label=".form-select-lg example">
                                                        @foreach ($courses as $course)
                                                            <option value="{{ $course->id }}"
                                                                @error('course_id') is-danger @enderror"
                                                                id="validationCourse">{{ $course->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please enter a Course.
                                                    </div>
                                                    @error('course_id')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="mb-3 row mt-4">
                                            <label class="col-lg-2 col-form-label" for="validationName">Content Lesson<span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-10">
                                                <input type="text" name="content"
                                                    class="form-control @error('content') is-danger @enderror"
                                                    id="validationcontent" placeholder="Enter Content Lesson.." required=""
                                                    value="{{ old('content') }}">
                                                <div class="invalid-feedback">
                                                    Please enter a Content.
                                                </div>
                                                @error('content')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
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
