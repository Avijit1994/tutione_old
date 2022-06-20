<x-app-layout>
    <div class="breadcrumb-container">
        <div class="container text-white breadcrumb-text">Home / Apply Now</div>
    </div>

    <section class="apply-section-box" style="background: url({{ asset('pub-assets/images/tutione-banner-01.png') }});">
        <div class="container">
            <div class="textty">
                <a href="{{ route('login') }}" type="button" class="btn btn-primary openLogin">
                    <img src="{{ asset('pub-assets/images/right.png') }}" style="height: 20px">
                    Register Now
                </a>
            </div>
        </div>
    </section>

    <div class="scobox123">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="botex">
                        <h4>Hurry the CBSE semester II dates have been announced!
                            Register and solve mock papers and get them evaluated.
                            Get maximum practice before the boards;
                            The TuitionE is happy to be a part of your academic journey !</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="botex text12">
                        <a href="{{ asset('uploads/ClassX_2022.pdf') }}" target="_blank">
                            <img src="{{ asset('assets/images/pdf-file.png') }}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="home-gradient-bg123">
        <div class="container testimonial-container">
            <div class="text-center dtg">
                <h1>Recent Mock Test</h1>
                <p>TheTuitionE – WE MEAN EDUCATION
                </p>
            </div>
            <div class="slider123 swiper">
                <div class="swiper-wrapper">
                    @foreach($tests as $test)
                        <div class="col-md-4 pd-5 swiper-slide">
                            <div class="testimonial-card123">
                                <h5>{{ $test->name }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="row swiper-controller contbr">
                <div class="swiper-button-prev-test col-md-6">
                    <span class="swiper-button-next-test"></span>
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div class="swiper-button-next-test col-md-6">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
        </div>
    </section>


</x-app-layout>
