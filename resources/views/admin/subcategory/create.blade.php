@extends('admin_layouts.admin_layout')

@section('title', ' Create Sub Category')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('categories.index') }}">Sub Categories</a></li>
                    <li class="breadcrumb-item"><a href="#">Create New Sub Category</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Sub Category</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="needs-validation" novalidate="" action="{{ route('subcategories.store') }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">

                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label" for="validationcategory"> Choose Category
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-10 basic-form">

                                                {{-- <select class="default-select  form-control wide">
                                                    @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select> --}}

                                                <select name="category_id" class="form-select form-select-lg mb-3"
                                                    aria-label=".form-select-lg example">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" selected>{{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @error('category_id')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label" for="validationname"> Sub Category Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-10">
                                                <input type="text" name="name"
                                                    class="form-control @error('name') is-danger @enderror"
                                                    id="validationname" placeholder="Enter a Sub Category Name.."
                                                    required="" value="{{ old('name') }}">
                                                <div class="invalid-feedback">
                                                    Please enter a Sub Category Name.
                                                </div>
                                                @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label" for="validationdescription">Description
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-10">
                                                <textarea name="description" class="form-control3" rows="33"></textarea>
                                            </div>
                                        </div>

                                        {{-- </div> --}}

                                    </div>

                                    <div class="row">
                                        <div class="input-group mb-3">
                                            <div class="form-file">
                                                <input type="file" name="image" class="form-file-input form-control">
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
