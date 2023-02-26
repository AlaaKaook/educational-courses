@extends('admin_layouts.admin_layout')

@section('title', ' Create Discount Code')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('admin.discounts.index') }}">Discount Codes</a></li>
                    <li class="breadcrumb-item"><a href="#">Create New Discount Code</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Discount Code</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="needs-validation" novalidate="" action="{{ route('admin.discounts.store') }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="mb-3 mt-4 row">
                                                <label class="col-lg-3 col-form-label" for="validationcategory">Course
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8">
                                                    <select name="course_id" class="form-select form-select-lg mb-3"
                                                        aria-label=".form-select-lg example">
                                                        @foreach ($courses as $course)
                                                            <option value="{{ $course->id }}"
                                                                @error('course_id') is-danger @enderror"
                                                                id="validationcategory">{{ $course->name }}</option>
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
                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="validationdiscount_code">Discount Code
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8">
                                                    <input type="text" name="discount_code"
                                                        class="form-control @error('discount_code') is-danger @enderror"
                                                        id="validationdiscount_code" placeholder="Enter a Discount Code.."
                                                        required="" value="{{ old('discount_code') }}">
                                                    <div class="invalid-feedback">
                                                        Please enter a Discount Code.
                                                    </div>
                                                    @error('discount_code')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>


                                        </div>


                                        <div class="col-xl-6">

                                            <div class="mb-3 row mt-3">
                                                <label class="col-lg-3 col-form-label" for="validationRate">Rate <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8">
                                                    <input type="text" name="rate"
                                                        class="form-control @error('rate') is-danger @enderror"
                                                        id="validationRate" placeholder="Enter a Rate Discount.."
                                                        required="" value="{{ old('rate') }}">
                                                    <div class="invalid-feedback">
                                                        Please enter a Rate Discount.
                                                    </div>
                                                    @error('rate')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row mt-5">
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
