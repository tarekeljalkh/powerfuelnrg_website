<section id="about" class="about-tow-section about-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-two-left-content wow slideInLeft" data-wow-delay="100ms">
                    <div class="about-two-sec-image">
                        <div class="about-two-sec-image-bg-1"
                            style="background-image: url({{ asset('assets/images/about/about-2--pattern-1.png') }})">
                        </div>
                        <div class="about-two-sec-image-bg-2"
                            style="background-image: url({{ asset('assets/images/about/about-2--pattern-2.png') }})">
                        </div>
                        <img src="{{ asset('storage/' . $about->image) }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-two-right-content">
                    <div class="about-two-title">
                        <h4 class="sub-title-shape-left section_title-subheading">About Our Company</h4>
                        <h2>{{ $about->title }} </h2>
                        <p class="about-two-title-text">{{ $about->description }}</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about-tow-experience-years">
                                <div class="about-tow-experience-years-icon">
                                    <span class="flaticon-check"></span>
                                </div>
                                <div class="about-tow-experience-years-text">
                                    <h2>{{ $about->first_text }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-tow-experience-years">
                                <div class="about-tow-experience-years-icon">
                                    <span class="flaticon-check"></span>
                                </div>
                                <div class="about-tow-experience-years-text">
                                    <h2>{{ $about->second_text }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
