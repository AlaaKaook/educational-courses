@extends('frontend_layouts.frontend_layout')

@section('title', 'Lessons')

@section('content')

    <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx"
                style="background-image:url({{ asset('assets/frontend/images/courses_background.jpg') }})"></div>
        </div>
        <div class="home_content">
            <h1>Lessons</h1>
        </div>
    </div>

    <div class="popular page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Lessons {{ $course->name }} </h1>
                        {{-- <h1> Lessons </h1> --}}
                    </div>
                </div>
            </div>

            <div class="row course_boxes">

                @foreach ($lessons as $lesson)
                    <div class="col-lg-4 course_box">
                        <div class="card">

                            @if ($lesson->course->type == 'web')

                            <video class="card-img-top" controls>
                                <source src="{{ asset('assets/upload/video/Lesson_video/' . $lesson->content) }}">
                            </video>

                            @elseif ($lesson->course->type == 'youtube')

                            <iframe class="card-img-top" width="700" height="300" src="{{$lesson->content}}">
                            </iframe>

                            @endif


                            <div class="card-body text-center">
                                <div class="card-title"><a href="#">{{ $lesson->name }}</a></div>

                                @if (Str::length($lesson->description) >= 25)
                                    <div class="card-text">{{ Str::substr($lesson->description, 0, 25) }}....</div>
                                @else
                                    <div class="card-text">{{ $lesson->description }}</div>
                                @endif

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>


@endsection
