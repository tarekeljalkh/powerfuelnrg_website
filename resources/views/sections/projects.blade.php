<section class="latest-projects-one-section">
    <div class="latest-projects-one-bg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="latest-pro-one-title">
                    <h4 class="sub-title-shape-left section_title-subheading">{{ $project->title }}</h4>
                    <h2>{{ $project->subtitle }}</h2>
                    <p>{{ $project->description }}</p>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="latest-pro-one-single">
                    <div class="latest-pro-one-img-box">
                        <img src="{{ asset($project->second_image) }}" alt="">
                        <div class="latest-pro-one-img-title">
                            <div class="content">
                                <h5><a href="#">Metal & Materials</a></h5>
                            </div>
                            <div class="icon"><a class="img-popup"
                                    href="{{ asset($project->second_image) }}"><span
                                        class="flaticon-plus"></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="latest-pro-one-single">
                    <div class="latest-pro-one-img-box">
                        <img src="{{ asset($project->third_image) }}" alt="">
                        <div class="latest-pro-one-img-title">
                            <div class="content">
                                <h5><a href="#">Welding Industry</a></h5>
                            </div>
                            <div class="icon"><a class="img-popup"
                                    href="{{ asset($project->third_image) }}"><span
                                        class="flaticon-plus"></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
