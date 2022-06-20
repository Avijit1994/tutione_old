<x-app-layout>
    <div class="breadcrumb-container">
        <div class="container text-white breadcrumb-text">Home / Success Stories</div>
    </div>
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center text-white">
                    <h1>Our Success Diaries</h1>
                    <p class="banner-text">Parents and Guardians review their experiences with TheTuitionE.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="container contact-container">
        <div class="row">
            <div class="col-md-12 banner-box">
                <div class="banner-card row p-4">
                    <div class="col-md-6 pd-10 mb-4">
                        <div class="video-card youtube-link" youtubeid="VV1Jw3HRd8Y"
                             data-image-src="{{ asset('pub-assets/images/video-card1.png') }}">
                            <i class="fas fa-play-circle"></i>
                        </div>
                    </div>
                    <div class="col-md-6 pd-10 mb-4">
                        <div class="video-card youtube-link" youtubeid="i8KeLLzN-Sw"
                             data-image-src="{{ asset('pub-assets/images/video-card2.png') }}">
                            <i class="fas fa-play-circle"></i>
                        </div>
                    </div>
                    @foreach($stories as $story)
                        <div class="col-md-4 pd-10 mb-4">
                            <div class="video-card youtube-link" youtubeid="{{ $story->video_link }}"
                                 data-image-src="{{ asset('s3/500/500/'. $story->image ) }}">
                                <i class="fas fa-play-circle"></i>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
