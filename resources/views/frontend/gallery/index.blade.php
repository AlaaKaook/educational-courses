@extends('frontend_layouts.frontend_layout')

@section('title', 'Gallery')

@section('content')

    <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx"
                style="background-image:url({{ asset('assets/frontend/images/courses_background.jpg') }})"></div>
        </div>
        <div class="home_content">
            <h1>Gallery</h1>
        </div>
    </div>

    <!-- Popular -->

    <div class="popular page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Gallery</h1>
                    </div>
                </div>
            </div>

            <div class="row course_boxes">

                @foreach ($images as $image)
                    <!-- Popular Course Item -->
                    <div class="col-lg-4 course_box">
                        <div class="card">
                            <img class="card-img-top" width="350px" height="263.77px"
                                src="{{ asset('assets/upload/images/gallery_img/' . $image->filename) }}" alt="Image">
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
