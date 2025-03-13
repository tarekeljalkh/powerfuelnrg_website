@if ($funFacts->count() > 0)

    <section class="funfacts-one-section" style="background-image: url(assets/images/background/funfact-1-bg.jpg)">
        <div class="container">
            <div class="row">

                @foreach ($funFacts as $funFact)
                    <div class="col-lg-4 col-md-6">
                        <!--Funfacts One Single-->
                        <div class="funfacts-one-single wow fadeInUp" data-wow-delay="100ms">
                            <div class="icon">
                                <span class="{{ $funFact->icon }}"></span>
                            </div>
                            <div class="content count-box">
                                <h2>
                                    <span class="timer" data-from="1" data-to="{{ $funFact->count }}"
                                        data-speed="5000" data-refresh-interval="50">{{ $funFact->count }}</span>
                                </h2>
                                <p>{{ $funFact->title }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endif
