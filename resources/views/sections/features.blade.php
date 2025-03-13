<section class="features-two-section">
    <div class="container">
        <div class="row">

            @foreach ($features as $feature)
                <div class="col-lg-3 col-md-6">
                    <!--Features One Sec Single-->
                    <div class="features-two-sec-single wow fadeInUp" data-wow-delay="300ms">
                        <div class="features-two-sec-icon">
                            <span class="{{ $feature->icon }}"></span>
                        </div>
                        <h3>{{ $feature->title }}</h3>
                        <p>{{ $feature->description }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
