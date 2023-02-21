@extends('admin_layouts.admin_layout')

@section('title', ' Create New Course')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('courses.index') }}">Courses</a></li>
                    <li class="breadcrumb-item"><a href="#">Create New Course</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Course</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="needs-validation" novalidate="" action="{{ route('courses.store') }}"
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


                                            <div class="mb-3 mt-4 row">
                                                <label class="col-lg-3 col-form-label" for="validationCost">Cost
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8">
                                                    <input type="text" name="cost"
                                                        class="form-control @error('cost') is-danger @enderror"
                                                        id="validationCost" placeholder="Enter a Cost.."
                                                        required="" value="{{ old('cost') }}">
                                                    <div class="invalid-feedback">
                                                        Please enter a Cost.
                                                    </div>
                                                    @error('cost')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 mt-4 row">
                                                <label class="col-lg-3 col-form-label"
                                                    for="validationStartCourse">Start Course
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8 form-material">
                                                        <input type="date" name="start" class="form-control  @error('start') is-danger @enderror"  id="validationStartCourse" placeholder="Enter the course start date">
                                                    <div class="invalid-feedback">
                                                        Please enter a start date.
                                                    </div>
                                                    @error('start')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 mt-4 row">
                                                <label class="col-lg-3 col-form-label"
                                                    for="validationEndCourse">End Course
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8 form-material">
                                                        <input type="date" name="end" class="form-control  @error('end') is-danger @enderror"  id="validationEndCourse" placeholder="Enter the course End date">
                                                    <div class="invalid-feedback">
                                                        Please enter a end date.
                                                    </div>
                                                    @error('end')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 mt-5 row">
                                                <label class="col-lg-3 col-form-label" for="validationdescription">Description
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-9">
                                                    <textarea name="description" class="form-control3" rows="33"></textarea>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="col-xl-6">

                                            <div class="mb-3 mt-4 row">
                                                <label class="col-lg-3 col-form-label">Type
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8">
                                                    <select name="type" class="form-select form-select-lg mb-3"
                                                        aria-label=".form-select-lg example">

                                                            <option value="youtube">Youtube</option>
                                                            <option value="zoom">Zoom</option>
                                                            <option value="web">In WebSite</option>

                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please enter a Type.
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="mb-3 mt-4 row">
                                                <label class="col-lg-3 col-form-label" for="validationcategory">Category
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8">
                                                    <select name="category_id" class="form-select form-select-lg mb-3"
                                                        aria-label=".form-select-lg example">
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}"
                                                                @error('category_id') is-danger @enderror"
                                                                id="validationcategory">{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please enter a Category.
                                                    </div>
                                                    @error('category_id')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="validationsubcategory">Sub
                                                    Category
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8">
                                                    <select name="subcategory_id" class="form-select form-select-lg mb-3"
                                                        aria-label=".form-select-lg example">
                                                        @foreach ($subcategories as $subcategory)
                                                            <option value="{{ $subcategory->id }}"
                                                                @error('subcategory_id') is-danger @enderror"
                                                                id="validationsubcategory">{{ $subcategory->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please enter a Sub Category.
                                                    </div>
                                                    @error('subcategory_id')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="validationTeacher">Teacher
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8">
                                                    <select name="teacher_id" class="form-select form-select-lg mb-3"
                                                        aria-label=".form-select-lg example">
                                                        @foreach ($teachers as $teacher)
                                                            <option value="{{ $teacher->id }}"
                                                                @error('teacher_id') is-danger @enderror"
                                                                id="validationTeacher">{{ $teacher->fname }} {{ $teacher->lname }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please enter a Sub Category.
                                                    </div>
                                                    @error('teacher_id')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="input-group mb-3">
                                            <div class="form-file">
                                                <input type="file" name="image"
                                                    class="form-file-input form-control">
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
