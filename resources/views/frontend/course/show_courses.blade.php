@extends('frontend_layouts.frontend_layout')

@section('title', 'Courses')

@section('content')


    <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url({{ asset('assets/frontend/images/courses_background.jpg') }})"></div>
        </div>
        <div class="home_content">
            <h1>Courses</h1>
        </div>
    </div>


    <!-- Popular -->

    <div class="popular page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>All Courses</h1>
                    </div>
                </div>
            </div>

            <div class="row course_boxes">

                @foreach ($courses as $course)
                    <!-- Popular Course Item -->
                    <div class="col-lg-4 course_box">
                        <div class="card">
                            <img class="card-img-top" width="350px" height="263.77px" src="{{ asset('assets/upload/images/course_img/' . $course->image) }}"
                                alt="Image Course">
                            <div class="card-body text-center">
                                <div class="card-title"><a href="{{route('lessons' , $course)}}">{{ $course->name }}</a></div>

                                @if (Str::length($course->description) >= 25)
                                    <div class="card-text">{{ Str::substr($course->description, 0, 25) }}....</div>
                                @else
                                    <div class="card-text">{{ $course->description }}</div>
                                @endif

                            </div>
                            <div class="price_box d-flex flex-row align-items-center">
                                <div class="course_author_image">
                                    <img src="{{ asset('assets/upload/images/teacher_img/' . $course->teacher->image) }}"
                                        width="46px" height="46px" alt="Image Teacher">
                                </div>
                                <div class="course_author_name">{{ $course->teacher->fname }} {{ $course->teacher->lname }}
                                </div>
                                <div class="course_price d-flex flex-column align-items-center justify-content-center">
                                    {{-- <span>${{ $course->cost }}</span> --}}
                                    <span>$ 0 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
