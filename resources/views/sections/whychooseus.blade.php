<section class="why-choose-two-section">
    <div class="container">
        <div class="thm-section-title text-center">
            <h4 class="sub-title-shape-left section_title-subheading">{{ $whyChooseUs->title }}</h4>
            <h2>{{ $whyChooseUs->subtitle }}</h2>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="why-choose-two-image">
                    <img src="{{ asset('storage/' . $whyChooseUs->image) }}" alt="">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-choose-right-content">
                    <div class="most-trusted-skill">
                        <div class="most-trusted-skill-icon">
                            <span class="{{ $whyChooseUs->icon }}"></span>
                        </div>
                        <div class="most-trusted-text">
                            <h3>{{ $whyChooseUs->second_title }}</h3>
                            <p>{{ $whyChooseUs->description }}
                            </p>
                        </div>
                    </div>
                    <div class="progress-levels">
                        <!--Skill Box-->
                        <div class="progress-box">
                            <div class="inner count-box">
                                <div class="text">{{ $whyChooseUs->skill_1 }}</div>
                                <div class="bar">
                                    <div class="bar-innner">
                                        <div class="skill-percent">
                                            <span class="count-text" data-speed="3000"
                                                data-stop="{{ $whyChooseUs->percentage_1 }}">0</span>
                                            <span class="percent">%</span>
                                        </div>
                                        <div class="bar-fill" data-percent="{{ $whyChooseUs->percentage_1 }}"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Skill Box-->
                        <div class="progress-box">
                            <div class="inner count-box">
                                <div class="text">{{ $whyChooseUs->skill_2 }}</div>
                                <div class="bar">
                                    <div class="bar-innner">
                                        <div class="skill-percent">
                                            <span class="count-text" data-speed="3000"
                                                data-stop="{{ $whyChooseUs->percentage_2 }}">0</span>
                                            <span class="percent">%</span>
                                        </div>
                                        <div class="bar-fill" data-percent="{{ $whyChooseUs->percentage_2 }}"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Skill Box-->
                        <div class="progress-box">
                            <div class="inner count-box">
                                <div class="text">{{ $whyChooseUs->skill_3 }}</div>
                                <div class="bar">
                                    <div class="bar-innner">
                                        <div class="skill-percent">
                                            <span class="count-text" data-speed="3000"
                                                data-stop="{{ $whyChooseUs->percentage_3 }}">0</span>
                                            <span class="percent">%</span>
                                        </div>
                                        <div class="bar-fill" data-percent="{{ $whyChooseUs->percentage_3 }}"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
