@extends('frontend_layouts.frontend_layout')

@section('title', 'Contact US')

@section('content')

    <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx"
                style="background-image:url({{ asset('assets/frontend/images/contact_background.jpg') }})"></div>
        </div>
        <div class="home_content">
            <h1>Contact</h1>
        </div>
    </div>

    <!-- Contact -->

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <!-- Contact Form -->
                    <div class="contact_form">
                        <div class="contact_title">Contact US</div>

                        <div class="contact_form_container">
                            <form action="{{ route('contact.send_email') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <input name="name" id="contact_form_name" class="input_field contact_form_name"
                                    type="text" placeholder="Name" required="required" data-error="Name is required.">

                                <input name="from_email" id="contact_form_email" class="input_field contact_form_email"
                                    type="email" placeholder="E-mail" required="required"
                                    data-error="Valid email is required.">

                                <textarea name="content" id="contact_form_message" class="text_field contact_form_message" name="message"
                                    placeholder="Message" required="required" data-error="Please, write us a message."></textarea>

                                <button id="contact_send_btn" type="submit" class="contact_send_btn trans_200"
                                    value="Submit">send message</button>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="about">
                        <div class="about_title">Join Courses</div>
                        <p class="about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor
                            nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros
                            varius luctus. Praesent finibus risus facilisis ultricies. Etiam eu purus nec eros varius
                            luctus.</p>

                        <div class="contact_info">
                            <ul>
                                @foreach ($settings as $setting)
                                    <li class="contact_info_item">
                                        <div class="contact_info_icon">
                                            <img src="{{ asset('assets/frontend/images/location3.jfif') }}"
                                                alt="location icon">
                                        </div>
                                        {{ $setting->location }}
                                    </li>
                                    <li class="contact_info_item">
                                        <div class="contact_info_icon">
                                            <img src="{{ asset('assets/frontend/images/phone.jfif') }}" alt="phone icon">
                                        </div>
                                        {{ $setting->phone }}
                                    </li>
                                    <li class="contact_info_item">
                                        <div class="contact_info_icon">
                                            <img src="{{ asset('assets/frontend/images/message.jfif') }}"
                                                alt="message icon">
                                        </div>{{ $setting->email }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Google Map -->

            {{-- <div class="row">
                <div class="col">
                    <div id="google_map">
                        <div class="map_container">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>

@endsection
