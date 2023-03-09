<!-- Footer -->

<footer class="footer">
    <div class="container">

        <!-- Newsletter -->

        <div class="newsletter">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Subscribe to newsletter</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col text-center">
                    <div class="newsletter_form_container mx-auto">
                        <form method="get" action="{{route('subscribe')}}">
                            <div
                                class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
                                <input id="newsletter_email" class="newsletter_email" type="email"
                                    placeholder="Email Address" required="required"
                                    data-error="Valid email is required.">
                                <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300"
                                    value="Submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer Content -->

        <div class="footer_content">
            <div class="row">

                <!-- Footer Column - About -->
                <div class="col-lg-3 footer_col">

                    <!-- Logo -->
                    <div class="logo_container">
                        <div class="logo">
                            <img src="{{ asset('assets/frontend/images/logo2.png') }}" alt="">
                            <span>course</span>
                        </div>
                    </div>

                    <p class="footer_about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae
                        tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum, tempor lacus.
                    </p>

                </div>

                <!-- Footer Column - Menu -->

                <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">Menu</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_list_item"><a href="{{ route('home.front') }}">Home</a></li>
                            <li class="footer_list_item"><a href="{{ route('courses') }}">Courses</a></li>
                            <li class="footer_list_item"><a href="{{ route('about') }}">About Us</a></li>
                            <li class="footer_list_item"><a href="{{route('teachers')}}">Teachers</a></li>
                            <li class="footer_list_item"><a href="c{{route('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Column - Usefull Links -->

                <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">courses</div>
                    <div class="footer_column_content">
                        <ul>
                            @foreach ($courses as $course)
                            @if ($loop->index < 5)
                            <li class="footer_list_item"><a href="{{route('lessons' , $course)}}">{{ $course->name }}</a></li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Footer Column - Contact -->

                <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">Contact</div>
                    <div class="footer_column_content">
                        <ul>
                            @foreach ($settings as $setting)
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="{{ asset('assets/frontend/images/location3.jfif') }}"
                                            alt="location icon">
                                    </div>
                                    {{ $setting->location }}
                                </li>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="{{ asset('assets/frontend/images/phone.jfif') }}"
                                            alt="phone icon">
                                    </div>
                                    {{ $setting->phone }}
                                </li>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
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

        <!-- Footer Copyright -->

        <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
            <div class="footer_copyright">
                <span>
                    Developed By <i class="fa fa-heart" aria-hidden="true"></i>
                    <a href="#">Alaa Kaook</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </span>
            </div>
            {{-- <div class="footer_social ml-sm-auto">
                <ul class="menu_social">
                    <li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div> --}}
        </div>

    </div>
</footer>
