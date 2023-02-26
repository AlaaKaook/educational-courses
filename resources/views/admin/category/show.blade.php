@extends('admin_layouts.admin_layout')

@section('title', ' Category Informations')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Category</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Informations</a></li>
                </ol>
            </div>

            <!-- row -->
            <div class="row">
                <div class="col-xl-4 col-lg-12 col-sm-12">
                    <div class="card overflow-hidden">
                        <div class="text-center p-3 overlay-box " style="background-image: url({{ asset('assets/dashboard/images/big/img1.jpg') }});">
                            <div class="profile-photo">
                                <img src="{{ asset('assets/upload/images/category_img/' . $category->image) }}" width="100" class="img-fluid rounded-circle"
                                    alt="">
                            </div>
                            <h3 class="mt-3 mb-1 text-white">{{$category->name}}</h3>
                            {{-- <p class="text-white mb-0">{{$student->user->type}}</p> --}}
                        </div>
                        <ul class="list-group list-group-flush">
                            {{-- <li class="list-group-item d-flex justify-content-between"><span class="mb-0 mx-5 mt-2">
                                Username :</span> <strong class="text-muted md-change2">{{$student->user->username}} </strong></li> --}}

                            <li><span class="mb-0 mx-5 mt-2"><h4 class="center-position">Category Description</h4>
                                    </span> <strong class="text-muted md-change2"><h4>{{$category->description}}</h4> </strong></li>

                        </ul>
                        <form action="{{ route('admin.categories.index') }}" method="get">

                        <div class="card-footer border-0 mt-0">
                            <button class="btn btn-primary btn-lg btn-block">
                                <i class="fa fa-bell-o"></i> BACK TO ALL CATEGORY
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
