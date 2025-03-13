<section class="banner-section wow fadeIn">
    <div class="swiper-container banner-slider">
        <div class="swiper-wrapper">

            @foreach ($banners as $banner)
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url('{{ asset('storage/' . $banner->image) }}');">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner">
                                <h1>{{ $banner->title }}</h1>
                                <div class="text">{{ $banner->description }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="banner-slider-nav">
        <div class="banner-slider-control banner-slider-button-prev"><span><i class="far fa-angle-left"></i></span>
        </div>
        <div class="banner-slider-control banner-slider-button-next"><span><i class="far fa-angle-right"></i></span>
        </div>
    </div>
    <div class="banner-shape__left_1"></div>
    <div class="banner-shape__left_2"></div>
</section>
