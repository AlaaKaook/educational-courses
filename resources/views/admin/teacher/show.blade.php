@extends('admin_layouts.admin_layout')

@section('title', ' Teacher Profile')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Teacher</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
                </ol>
            </div>

            <!-- row -->
            <div class="row">
                <div class="col-xl-4 col-lg-12 col-sm-12">
                    <div class="card overflow-hidden">
                        <div class="text-center p-3 overlay-box " style="background-image: url({{ asset('assets/dashboard/images/big/img1.jpg') }});">
                            <div class="profile-photo">
                                <img src="{{ asset('assets/upload/images/teacher_img/' . $teacher->image) }}" width="100" class="img-fluid rounded-circle"
                                    alt="">
                            </div>
                            <h3 class="mt-3 mb-1 text-white">{{$teacher->fname}} {{$teacher->lname}}</h3>
                            <p class="text-white mb-0">{{$teacher->user->type}} </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0 mx-5 mt-2">
                                Username :</span> <strong class="text-muted md-change">{{$teacher->user->username}} </strong></li>

                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0 mx-5 mt-2">Email :
                                    </span> <strong class="text-muted md-change">{{$teacher->email}} </strong></li>

                                    <li class="list-group-item d-flex justify-content-between"><span class="mb-0 mx-5 mt-2">Country :
                                    </span> <strong class="text-muted md-change">{{$teacher->country}} </strong></li>

                                    <li class="list-group-item d-flex justify-content-between"><span class="mb-0 mx-5 mt-2">Birthdate :
                                    </span> <strong class="text-muted md-change">{{$teacher->birthdate}} </strong></li>

                                    <li class="list-group-item d-flex justify-content-between"><span class="mb-0 mx-5 mt-2">Phone :
                                    </span> <strong class="text-muted md-change">{{$teacher->phone}} </strong></li>

                                    <li class="list-group-item d-flex justify-content-between"><span class="mb-0 mx-5 mt-2">Notes :
                                    </span> <strong class="text-muted md-change">{{$teacher->notes}} </strong></li>

                                    <li class="list-group-item d-flex justify-content-between"><span class="mb-0 mx-5 mt-2">
                                        Gender :</span> <strong class="text-muted md-change">{{$teacher->gender}} </strong></li>
                        </ul>
                        <form action="{{ route('admin.teachers.index') }}" method="get">

                        <div class="card-footer border-0 mt-0">
                            <button class="btn btn-primary btn-lg btn-block">
                                <i class="fa fa-bell-o"></i> BACK TO ALL TEACHER
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
