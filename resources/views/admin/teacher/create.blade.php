@extends('admin_layouts.admin_layout')

@section('title', ' Create Teacher')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('admin.teachers.index') }}">Teachers</a></li>
                    <li class="breadcrumb-item"><a href="#">Create New teacher</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Teacher</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="needs-validation" novalidate="" action="{{ route('admin.teachers.store') }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="validationfirstname">First Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8">
                                                    <input type="text" name="fname"
                                                        class="form-control @error('fname') is-danger @enderror"
                                                        id="validationfirstname" placeholder="Enter a First Name.."
                                                        required="" value="{{ old('fname') }}">
                                                    <div class="invalid-feedback">
                                                        Please enter a First Name.
                                                    </div>
                                                    @error('fname')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="validationEmail">Email <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8">
                                                    <input type="text" name="email"
                                                        class="form-control @error('email') is-danger @enderror"
                                                        id="validationEmail" placeholder="Your valid email.."
                                                        required="" value="{{ old('email') }}">
                                                    <div class="invalid-feedback">
                                                        Please enter a Email.
                                                    </div>
                                                    @error('email')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="validationCustom01">Username
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8">
                                                    <input type="text" name="username"
                                                        class="form-control @error('username') is-danger @enderror"
                                                        id="validationCustom01" placeholder="Enter a username.."
                                                        required="" value="{{ old('username') }}">
                                                    <div class="invalid-feedback">
                                                        Please enter a username.
                                                    </div>
                                                    @error('username')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="validationCountry">Country
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8">
                                                    <input type="text" name="country"
                                                        class="form-control @error('country') is-danger @enderror"
                                                        id="validationCountry" placeholder="Enter a Country.."
                                                        required="" value="{{ old('country') }}">
                                                    <div class="invalid-feedback">
                                                        Please enter a Country.
                                                    </div>
                                                    @error('country')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="validationnotes">Notes
                                                    {{-- <span class="text-danger">*</span> --}}
                                                </label>
                                                <div class="col-lg-8">
                                                    <textarea name="notes" class="form-control2" cols="42"></textarea>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="col-xl-6">

                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="validationlastname">Last Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8">
                                                    <input type="text" name="lname"
                                                        class="form-control @error('lname') is-danger @enderror"
                                                        id="validationlastname" placeholder="Enter a Last Name.."
                                                        required="" value="{{ old('lname') }}">
                                                    <div class="invalid-feedback">
                                                        Please enter a Last Name.
                                                    </div>
                                                    @error('lname')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="validationphone">Phone
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8">
                                                    <input type="text" name="phone"
                                                        class="form-control @error('phone') is-danger @enderror"
                                                        id="validationphone" placeholder="Enter a Phone.."
                                                        required="" value="{{ old('phone') }}">
                                                    <div class="invalid-feedback">
                                                        Please enter a Phone.
                                                    </div>
                                                    @error('phone')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="validationPassword">Password
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8">
                                                    <input type="password" name="password"
                                                        class="form-control @error('password') is-danger @enderror"
                                                        id="validationPassword" placeholder="Choose a safe password.."
                                                        required="" value="{{ old('password') }}">
                                                    <div class="invalid-feedback">
                                                        Please enter a password.
                                                    </div>
                                                    @error('password')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="validationbirthdate">birthdate
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8">
                                                    <input type="date" name="birthdate"
                                                        class="datepicker-default form-control @error('birthdate') is-danger @enderror"
                                                        id="validationbirthdate" placeholder="Enter a Birthdate.."
                                                        required="" value="{{ old('birthdate') }}">
                                                    <div class="invalid-feedback">
                                                        Please enter a birthdate.
                                                    </div>
                                                    @error('birthdate')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="validationgender">Gender
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8">
                                                    <label class="form-check-label">
                                                        Female
                                                    </label>
                                                    <input class="form-check-input @error('gender') is-danger @enderror"
                                                        type="radio" name="gender" value="female" checked="">
                                                    <label class="form-check-label">
                                                        Male
                                                    </label>
                                                    <input class="form-check-input @error('gender') is-danger @enderror"
                                                        type="radio" name="gender" value="male">
                                                    <div class="invalid-feedback">
                                                        Please enter a gender.
                                                    </div>
                                                    @error('gender')
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
