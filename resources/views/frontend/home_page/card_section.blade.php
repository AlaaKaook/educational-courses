<div class="hero_boxes">
    <div class="hero_boxes_inner">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 hero_box_col">
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <img src="{{ asset('assets/frontend/images/earth-globe.svg') }}" class="svg" alt="">
                        <div class="hero_box_content">
                            <h2 class="hero_box_title">Register now</h2>
                            <a href="{{ route('register') }}" class="hero_box_link">View Register Page</a><br>
                            <a href="{{ route('login') }}" class="hero_box_link">View Login Page</a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 hero_box_col">
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <img src="{{ asset('assets/frontend/images/books.svg') }}" class="svg" alt="">
                        <div class="hero_box_content">
                            <h2 class="hero_box_title">Our Courses</h2>
                            <a href="{{ route('courses') }}" class="hero_box_link">view more</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 hero_box_col">
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <img src="{{ asset('assets/frontend/images/professor.svg') }}" class="svg" alt="">
                        <div class="hero_box_content">
                            <h2 class="hero_box_title">Our Teachers</h2>
                            <a href="{{ route('teachers') }}" class="hero_box_link">view more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
