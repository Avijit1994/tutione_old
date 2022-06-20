<x-app-layout>
    <div id="myCarousel" class="carousel slide home-carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($banners as $banner)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ asset('s3/1920/660/'.$banner->image) }}" width="100%"
                         alt="1641884259517.png" />
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="tu-title">About Us</h1>
                <p class="tu-about">
                    At TheTuitionE we presume that every child is gifted with abilities which bloom when nurtured with
                    the
                    right
                    resources. TheTuitionE strives to connect the best teachers from across the globe to students in the
                    Middle
                    East,
                    catering to countries like Oman, Dubai - UAE, Saudi Arabia - KSA, Qatar, Bahrain and Kuwait. Making inroads in the digital
                    arena, TheTuitionE brings the best tutoring services at each pupil’s doorsteps beyond barriers.
                </p>
                <a href="{{ route('page', 'about') }}" class="btn login-btn">Know More</a>
            </div>
            <div class="col-md-6 home-abot-img">
                <img src="{{ asset('pub-assets/images/about.png') }}" alt="" style="width: 100%; float: right;"/>
            </div>
        </div>
    </section>

    <section class="mt-5 mb-4">
        <div class="container">
            <div class="section-heading-light curriculum-heading">
                <h1>Curriculum We Offer</h1>
                <span> TheTuitionE – WE MEAN EDUCATION </span>
            </div>
            <div class="tutor-swiper swiper">
                <div class="swiper-wrapper">
                    @foreach($curriculums as $curriculum)
                        <a class="col-md-3 p-4 swiper-slide" href="{{ route('curriculum.detail',$curriculum->slug) }}">
                            <div class="curriculum-card">
                                <img src="{{ asset('s3/300/300/'.$curriculum->image) }}" alt=""/>
                                <span class="curriculum-title">{{ $curriculum->name }}</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="section-choose">
        <div class="container">
            <div class="section-heading">
                <h1>Why Choose Us</h1>
                <span> TheTuitionE – WE MEAN EDUCATION </span>
            </div>
            <div class="row">
                <div class="col-md-3 wc-card">
                    <img src="{{ asset('pub-assets/images/customize-icon.png') }}" class="why-con" alt=""/>
                    <div class="tu-feature">
                        <h3 class="tu-feature-heading">Customized Supervision</h3>
                        <p>
                            Individual mentoring was conducted through live online sessions targeted towards developing
                            critical thinking abilities and conceptualizing knowledge to students across Oman, Saudi Arabia - KSA, Dubai - UAE,
                            Baharin, Qatar and
                            Kuwait.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 wc-card">
                    <img src="{{ asset('pub-assets/images/teaching-icon.png') }}" class="why-con" alt=""/>
                    <div class="tu-feature">
                        <h3 class="tu-feature-heading">Student-Centric Teaching</h3>
                        <p>Teaching techniques are modeled based on learner needs, Educators at TheTuitionE are adept
                            with
                            the
                            latest teaching methodologies to tap individual weaknesses and provide the required
                            assistance.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 wc-card">
                    <img src="{{ asset('pub-assets/images/evolution-icon.png') }}" class="why-con" alt=""/>
                    <div class="tu-feature">
                        <h3 class="tu-feature-heading">Continuous Evaluation</h3>
                        <p>Periodic evaluation and grading system is followed to track the progress of each learner in
                            academics as well as to gauge the development with specific attention to slow learners.</p>
                    </div>
                </div>
                <div class="col-md-3 wc-card">
                    <img src="{{ asset('pub-assets/images/expert-educator-icon.png') }}" class="why-con"
                         alt=""/>
                    <div class="tu-feature">
                        <h3 class="tu-feature-heading">Expert Educators</h3>
                        <p>Our expert educators are carefully curated who have proven expertise in imparting quality
                            education to students from diverse backgrounds of ICSE, CBSE, IB, IGCSE, origin residing in
                            the
                            Middle East region.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container home-tutor-container">
        <div class="section-heading-light">
            <h1>Our Educators</h1>
            <span> Our educators are our Assets </span>
        </div>
        <div class="tutor-swiper swiper">
            <div class="swiper-wrapper">
                @foreach($teachers as $teacher)
                    <div class="col-md-3 pd-5 swiper-slide">
                        <div class="tutor-card">
                            <div class="tutor-profile-img">
                                <img src="{{ asset('s3/100/100/'.$teacher->image) }}" alt=""/>
                            </div>
                            <div class="tutor-details">
                                <h4 class="tutor-name">{{ $teacher->name }}</h4>
                                <span class="tutor-degree"> {{ $teacher->profile_headline }} </span>
                            </div>
                        </div>
                        <div class="tutor-summary">
                            <p>
                                {{ $teacher->about }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <livewire:find-teacher-component/>
    </section>

    <section class="container">
        <div class="student-voice-card">
            <div class="voice-student-heading">
                Voice of Students
            </div>
            <div class="row">
                <div class="col-md-6 pd-10">
                    <div class="video-card youtube-link" youtubeid="VV1Jw3HRd8Y"
                         data-image-src="{{ asset('pub-assets/images/video-card1.png') }}">
                        <i class="fas fa-play-circle"></i>
                    </div>
                </div>
                <div class="col-md-6 pd-10">
                    <div class="video-card youtube-link" youtubeid="i8KeLLzN-Sw"
                         data-image-src="{{ asset('pub-assets/images/video-card2.png') }}">
                        <i class="fas fa-play-circle"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-gradient-bg">
        <div class="container testimonial-container">
            <div class="section-heading testimonial-home-title">
                <h1>What People Say</h1>
                <span> TheTuitionE – WE MEAN EDUCATION </span>
            </div>
            <div class="swiper-container swiper">
                <div class="swiper-wrapper">
                    @foreach($testimonials as $testimonial)
                        <div class="col-md-4 pd-5 swiper-slide">
                            <div class="testimonial-card">
                                <div class="testimoni-content">
                                    <div class="client-img">
                                        <img src="{{ asset('s3/219/219/'.$testimonial->image) }}"
                                             alt="Sandip Kundu"/>
                                    </div>
                                    <h5>{{ $testimonial->name }}</h5>
                                    <p class="tu-testimonial">
                                        {{ $testimonial->description }}
                                    </p>
                                    <a class="open-testimonial">Know More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row swiper-controller">
                <div class="swiper-button-prev-test col-md-6"><span class="swiper-button-next-test"></span><i
                        class="fas fa-chevron-left"></i></div>
                <div class="swiper-button-next-test col-md-6"><i class="fas fa-chevron-right"></i></div>
            </div>
        </div>

        <div class="modal fade" id="teatimonialModal" tabindex="-1" aria-labelledby="teatimonialModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="teatimonialModalLabel">Testimonial</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p id="testimoni-content"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container course-container">
        <div class="section-heading-light mb-2">
            <h1>Trending Subjects</h1>
            <span> Enroll now with our Trending Subjects </span>
        </div>
        <div class="subject-swiper swiper">
            <div class="swiper-wrapper">
                <a class="col-md-4 p-3 swiper-slide" href="https://thetuitione.com/cbse/x/arabic">
                    <div class="course-card-img">
                        <img src="{{ asset('pub-assets/uploads/subjects/arabic.png') }}" alt=""/>
                    </div>
                    <div class="course-card-body">
                        <h4 class="course-title mb-2">Arabic</h4>
                        <p class="course-desc"></p>
                    </div>
                </a>
                <a class="col-md-4 p-3 swiper-slide" href="https://thetuitione.com/cbse/x/french">
                    <div class="course-card-img">
                        <img src="{{ asset('pub-assets/uploads/subjects/french.png') }}" alt=""/>
                    </div>
                    <div class="course-card-body">
                        <h4 class="course-title mb-2">French</h4>
                        <p class="course-desc"></p>
                    </div>
                </a>
                <a class="col-md-4 p-3 swiper-slide" href="https://thetuitione.com/cbse/x/mathematics">
                    <div class="course-card-img">
                        <img src="{{ asset('pub-assets/uploads/subjects/math.png') }}" alt=""/>
                    </div>
                    <div class="course-card-body">
                        <h4 class="course-title mb-2">Mathematics</h4>
                        <p class="course-desc"></p>
                    </div>
                </a>
                <a class="col-md-4 p-3 swiper-slide" href="https://thetuitione.com/cbse/x/science">
                    <div class="course-card-img">
                        <img src="{{ asset('pub-assets/uploads/subjects/science.png') }}" alt=""/>
                    </div>
                    <div class="course-card-body">
                        <h4 class="course-title mb-2">Science</h4>
                        <p class="course-desc"></p>
                    </div>
                </a>
                <a class="col-md-4 p-3 swiper-slide" href="https://thetuitione.com/cbse/x/physics">
                    <div class="course-card-img">
                        {{--                        <span class="curriculum-badge">CBSE </span>--}}
                        <img src="{{ asset('pub-assets/uploads/subjects/physics.png') }}" alt=""/>
                    </div>
                    <div class="course-card-body">
                        <h4 class="course-title mb-2">Physics</h4>
                        <p class="course-desc"></p>
                        {{--                        <a href="find-teacherd52a.html?subject=5" class="btn course-enrol-btn">Enroll Now <i class="fas fa-arrow-right"></i></a>--}}
                    </div>
                </a>
                <a class="col-md-4 p-3 swiper-slide" href="https://thetuitione.com/cbse/x/chemistry">
                    <div class="course-card-img">
                        {{--                        <span class="curriculum-badge">CBSE </span>--}}
                        <img src="{{ asset('pub-assets/uploads/subjects/chemistry.png') }}" alt=""/>
                    </div>
                    <div class="course-card-body">
                        <h4 class="course-title mb-2">Chemistry</h4>
                        <p class="course-desc"></p>
                        {{--                        <a href="find-teacherd52a.html?subject=5" class="btn course-enrol-btn">Enroll Now <i class="fas fa-arrow-right"></i></a>--}}
                    </div>
                </a>
                <a class="col-md-4 p-3 swiper-slide" href="https://thetuitione.com/cbse/x/biology">
                    <div class="course-card-img">
                        {{--                        <span class="curriculum-badge">CBSE </span>--}}
                        <img src="{{ asset('pub-assets/uploads/subjects/biology.png') }}" alt=""/>
                    </div>
                    <div class="course-card-body">
                        <h4 class="course-title mb-2">Biology</h4>
                        <p class="course-desc"></p>
                        {{--                        <a href="find-teacherd52a.html?subject=5" class="btn course-enrol-btn">Enroll Now <i class="fas fa-arrow-right"></i></a>--}}
                    </div>
                </a>
                <a class="col-md-4 p-3 swiper-slide" href="">
                    <div class="course-card-img">
                        {{--                        <span class="curriculum-badge">CBSE </span>--}}
                        <img src="{{ asset('pub-assets/uploads/subjects/bengali.png') }}" alt=""/>
                    </div>
                    <div class="course-card-body">
                        <h4 class="course-title mb-2">Bengali</h4>
                        <p class="course-desc"></p>
                        {{--                        <a href="find-teacherd52a.html?subject=5" class="btn course-enrol-btn">Enroll Now <i class="fas fa-arrow-right"></i></a>--}}
                    </div>
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
