<section class="testimonials-one-section two"
    style="background-image: url({{ asset('assets/images/background/video-sec-two-bg.jpg') }})">
    <div class="container">
        <div class="thm-section-title text-center">
            <h4 class="sub-title-shape-left section_title-subheading">Testimonials</h4>
            <h2>We are Trusted <br>
                25 Countries Worldwide</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonials-one-carousel owl-theme owl-carousel">

                    @foreach ($testimonials as $testimonial)
                        <!--Testimonials One Single-->
                        <div class="testimonials-one-single">
                            <div class="client-info">
                                <div class="client-img">
                                    <img src="{{ asset('storage/' . $testimonial->client_image) }}" alt="">
                                </div>
                                <div class="client-content">
                                    <h3>{{ $testimonial->client_name }}</h3>
                                    <h6>{{ $testimonial->client_role }}</h6>
                                </div>
                            </div>
                            <div class="text-box">
                                <p>{{ $testimonial->testimonial }}</p>
                            </div>
                            <div class="testimonials-quote">
                                <i class="fa fa-quote-left"></i>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
