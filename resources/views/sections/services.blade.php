<section id="services" class="main-service-one-section two">
    <div class="container">
        <div class="thm-section-title text-center">
            <h4 class="sub-title-shape-left section_title-subheading">WHAT WE OFFER</h4>
            <h2>We Are Dedicated To <br> Serve You All Time.</h2>
        </div>
        <div class="row">
            @foreach($services as $key => $service)
                <div class="col-xl-4 col-lg-4">
                    <!--Main Service One Sec Single-->
                    <div class="main-service-one-sec-single wow fadeInUp" data-wow-delay="{{ ($key + 1) * 300 }}ms">
                        <div class="main-service-one-sec-img">
                            <img src="{{ asset($service->image) }}" alt="{{ $service->title }}">
                        </div>
                        <div class="main-service-one-sec-content">
                            <div class="main-service-one-count">{{ sprintf('%02d', $key + 1) }}</div>
                            <div class="main-service-one-icon"><i class="{{ $service->icon }}"></i></div>
                            <h3>{{ $service->title }}</h3>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
