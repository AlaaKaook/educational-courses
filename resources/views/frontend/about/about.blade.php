@extends('frontend_layouts.frontend_layout')

@section('title', 'About Us')

@section('content')

    <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx"
                style="background-image:url({{ asset('assets/frontend/images/news_background.jpg') }})"></div>
            {{-- <div class="home_background prlx" style="background-image:url(images/news_background.jpg)"></div> --}}
        </div>
        <div class="home_content">
            <h1>About US</h1>
        </div>
    </div>

    <!-- News -->

    <div class="popular page_section">
        <div class="container">

            <div class="row mb-5">
                <div class="col mb-5">
                    <div class="section_title text-center">
                        <h1>About The Company</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($settings as $setting)
                    <!-- News Column -->

                    <div class="col-lg-8">

                        <div class="news_posts">
                            <!-- News Post -->
                            <div class="news_post">
                                <div class="news_post_image">
                                    <img src="{{ asset('assets/upload/images/about_img/' . $setting->about_image) }}" alt="About US Image">
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Sidebar Column -->

                    <div class="col-lg-4">
                        <div class="sidebar">

                            <!-- Archives -->
                            <div class="sidebar_section">
                                <div class="sidebar_section_title">
                                    <h1>About US :</h1>
                                </div>
                                <ul class="sidebar_list">
                                    <li class="sidebar_list_item"> </li>
                                    <li class="sidebar_list_item"> {{ $setting->about }} </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
