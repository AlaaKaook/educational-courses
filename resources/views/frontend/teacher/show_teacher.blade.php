@extends('frontend_layouts.frontend_layout')

@section('title', 'Teachers')

@section('content')


    <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx"
                style="background-image:url({{ asset('assets/frontend/images/courses_background.jpg') }})"></div>
        </div>
        <div class="home_content">
            <h1>Teachers</h1>
        </div>
    </div>


    <!-- Popular -->

    <div class="popular page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>All Teachers</h1>
                    </div>
                </div>
            </div>

            <div class="row course_boxes">

                @foreach ($teachers as $teacher)
                    <!-- Popular Course Item -->
                    <div class="col-lg-4 course_box">
                        <div class="card">
                            <img class="card-img-top" width="350px" height="263.77px"
                                src="{{ asset('assets/upload/images/teacher_img/' . $teacher->image) }}" alt="Image Course">
                            <div class="card-body text-center">
                                <div class="card-title"><a href="#">{{ $teacher->fname }} {{ $teacher->lname }}</a></div>

                                <div class="card-text">{{ $teacher->notes }}</div>

                            </div>
                            <div class="price_box d-flex flex-row align-items-center">
                                <div class="course_author_image">
                                    <img src="{{ asset('assets/upload/images/teacher_img/' . $teacher->image) }}"
                                        width="46px" height="46px" alt="Image Teacher">
                                </div>
                                <div class="course_author_name">{{ $teacher->fname }} {{ $teacher->lname }}
                                </div>
                                <div class="course_price d-flex flex-column align-items-center justify-content-center">
                                    {{-- <span>${{ $course->cost }}</span> --}}
                                    <span> --- </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
