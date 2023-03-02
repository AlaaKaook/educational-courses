	<!-- Home -->

	<div class="home">

		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">

                @foreach ($sliders as $slider)

				<!-- Hero Slide -->
				<div class="hero_slide">
					{{-- <div class="hero_slide_background" style="background-image:url({{ asset('assets/frontend/images/slider_img/' . $slider->image) }})"></div> --}}
                    <img class="hero_slide_background" src="{{ asset('assets/upload/images/slider_img/' . $slider->image) }}" alt="Slider">
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center align-new">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">{{ $slider->title }}</h1>
						</div>
					</div>
				</div>

                @endforeach

			</div>

			<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">Prev</span></div>
			<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">Next</span></div>
		</div>

	</div>
