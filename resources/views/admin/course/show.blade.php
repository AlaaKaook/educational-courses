@extends('admin_layouts.admin_layout')

@section('title', ' Course Informations')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Course</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Informations</a></li>
                </ol>
            </div>

            <!-- row -->
            <div class="row">
                <div class="col-xl-4 col-lg-12 col-sm-12">
                    <div class="card overflow-hidden">
                        <div class="text-center p-3 overlay-box "
                            style="background-image: url({{ asset('assets/dashboard/images/big/img1.jpg') }});">
                            <div class="profile-photo">
                                <img src="{{ asset('assets/upload/images/course_img/' . $course->image) }}" width="100"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-3 mb-1 text-white">{{ $course->name }}</h3>
                            <p class="text-white mb-0">{{ $course->teacher->fname }} {{ $course->teacher->lname }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0 mx-5 mt-2">
                                    Category :</span> <strong class="text-muted md-change">{{ $course->category->name }}
                                </strong></li>

                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0 mx-5 mt-2">Sub
                                    Category :
                                </span> <strong class="text-muted md-change">{{ $course->subcategory->name }} </strong></li>

                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0 mx-5 mt-2">Type :
                                </span> <strong class="text-muted md-change">{{ $course->type }} </strong></li>

                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0 mx-5 mt-2">Cost :
                                </span> <strong class="text-muted md-change">{{ $course->cost }} </strong></li>

                            @isset ($course->discount->discount_code)
                                <li class="list-group-item d-flex justify-content-between"><span
                                        class="mb-0 mx-5 mt-2">Discount Code :
                                    </span> <strong class="text-muted md-change">{{ $course->discount->discount_code }}
                                    </strong></li>
                            @else
                                <li class="list-group-item d-flex justify-content-between"><span
                                        class="mb-0 mx-5 mt-2">Discount Code :
                                    </span> <strong class="text-muted md-change">Not Found</strong></li>
                            @endisset

                            @isset ($course->discount->rate)
                                <li class="list-group-item d-flex justify-content-between"><span class="mb-0 mx-5 mt-2">Rate
                                        Discount :
                                    </span> <strong class="text-muted md-change">{{ $course->discount->rate }}
                                    </strong></li>
                            @else
                                <li class="list-group-item d-flex justify-content-between"><span class="mb-0 mx-5 mt-2">Rate
                                        Discount :
                                    </span> <strong class="text-muted md-change">Not Found
                                    </strong></li>
                            @endisset

                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0 mx-5 mt-2">Start
                                    Date :
                                </span> <strong class="text-muted md-change">{{ $course->start }} </strong></li>

                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0 mx-5 mt-2">End Date
                                    :
                                </span> <strong class="text-muted md-change">{{ $course->end }} </strong></li>

                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0 mx-5 mt-2">
                                    Description :</span> <strong class="text-muted md-change">{{ $course->description }}
                                </strong></li>
                        </ul>
                        <form action="{{ route('courses.index') }}" method="get">

                            <div class="card-footer border-0 mt-0">
                                <button class="btn btn-primary btn-lg btn-block">
                                    <i class="fa fa-bell-o"></i> BACK TO ALL course
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
