@extends('admin_layouts.admin_layout')

@section('title', ' Create Message')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('admin.students.index') }}">Messages</a></li>
                    <li class="breadcrumb-item"><a href="#">Create New Messages</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Message</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="needs-validation" novalidate="" action="{{ route('admin.message.replay' ,$message) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-12">

                                            <div class="mb-3 row">
                                                <label class="col-lg-2 col-form-label" for="validationEmail">Mail To <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="to_email"
                                                        class="form-control @error('to_email') is-danger @enderror"
                                                        id="validationto_email" placeholder="Enter The Email.."
                                                        required="" value="{{ $message->from_email }}">
                                                    <div class="invalid-feedback">
                                                        Please enter a email.
                                                    </div>
                                                    @error('to_email')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="mb-3 row">
                                                <label class="col-lg-2 col-form-label" for="validationnotes">Message
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-9">
                                                    <textarea name="content" class="form-control3" cols="42"></textarea>
                                                </div>
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
