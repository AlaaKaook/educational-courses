<!-- Register -->

<div class="register">

    <div class="container-fluid">

        <div class="row row-eq-height">
            <div class="col-lg-6 nopadding">

                <!-- Register -->
                @foreach ($settings as $setting)
                    <div class="register_section d-flex flex-column align-items-center justify-content-center">
                        <div class="register_content text-center">
                            <h1 class="register_title">{{ $setting->search }}</h1>

                            {{-- <p class="register_text">Find any Course</p> --}}
                            <p class="register_text"> </p>

                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-lg-6 nopadding">

                <!-- Search -->

                <div class="search_section d-flex flex-column align-items-center justify-content-center">
                    <div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
                    <div class="search_content text-center">
                        <h1 class="search_title">Search for your course</h1>
                        {{-- <form id="search_form" class="search_form" action="post"> --}}
                        <form id="search_form" class="search_form" method="get" action="{{ route('result_search') }}">

                            <input name="search" value="{{ request()->query('search', '') }}" id="search_form_name"
                                class="input_field search_form_name" type="text" placeholder="Course Name"
                                required="required" data-error="Course name is required.">

                                <input id="search_form_degree" class="input_field search_form_degree" type="text"
                                placeholder="Lesson">

                            <input id="search_form_category" class="input_field search_form_category" type="text"
                                placeholder="Category">

                            <button id="search_submit_button" type="submit" class="search_submit_button trans_200"
                                value="Submit">search course</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
