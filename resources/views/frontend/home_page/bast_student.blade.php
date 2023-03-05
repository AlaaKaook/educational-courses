<!-- Testimonials -->

<div class="testimonials page_section">
    <!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
    <div class="testimonials_background_container prlx_parent">
        <div class="testimonials_background prlx"
            style="background-image:url({{ asset('assets/frontend/images/course_1.jpg') }})"></div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Bast Students</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-lg-1">

                <div class="testimonials_slider_container">

                    <!-- Testimonials Slider -->
                    <div class="owl-carousel owl-theme testimonials_slider">

                        @foreach ($students as $student)
                            <!-- Testimonials Item -->
                            <div class="owl-item">
                                <div class="testimonials_item text-center">
                                    <div class="quote">“</div>
                                    <p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum
                                        nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus
                                        tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla,
                                        vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor
                                        fermentum.</p>
                                    <div class="testimonial_user">
                                        <div class="testimonial_image mx-auto">
                                            <img src="{{ asset('assets/upload/images/student_img/' . $student->image) }}"
                                                alt="Student Image" width="98px" height="98px">
                                        </div>
                                        <div class="testimonial_name">{{ $student->fname }} {{ $student->lname }}</div>
                                        <div class="testimonial_title">Bast Student</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
