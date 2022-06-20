<x-app-layout>
    <div class="breadcrumb-container">
        <div class="container text-white breadcrumb-text">Home / Find Teacher</div>
    </div>
    <section class="find-banner-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center text-white">
                    <h1>Find your Teacher</h1>
                    <p class="banner-text">Our Panel consists of qualified and experienced educators, equipped to
                        offer the best teaching services.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="container contact-container">
        <livewire:find-teacher-component/>
        <div class="row mt-4">
            <div class="row" id="search_result">
                <h1 class="search-placeholder">Choose a Teacher</h1>
            </div>
            <div class="row">
                @isset($teachers)
                    @foreach ($teachers as $teacher)
                        <div class="col-md-12 col-lg-8 popperhover">
                            <div class="vfgb">
                                <div class="row ">
                                    <div class="col-md-3">
                                        <div class="bnfg">
                                            <a href="{{ route('teacher.details',$teacher->id) }}">
                                                <img src="{{ empty($teacher->image) ? $teacher->getUrlfriendlyAvatar(200) : asset('s3/200/200/'.$teacher->image)}}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="textbm">
                                            <h3>
                                                <a href="{{ route('teacher.details',$teacher->id) }}">{{ $teacher->first_name.' '.$teacher->last_name }}</a>
                                            </h3>
                                            <h5><i class="fas fa-graduation-cap"></i>{{ $teacher->profile_headline }}
                                            </h5>
                                            <p>{{ Str::limit($teacher->about,200) }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="bottombox12">
                                            <a class="book123"
                                               href="{{ route('page',[ 'book-demo','curriculum'=>request()->curriculam,'grade'=>request()->grade,'subject[]'=>request()->subject,'teacher'=>$teacher->id]) }}">Book
                                                trial lesson</a>
                                            {{--                                            <a class="messagebutton" href="#">Message</a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popover_hidehover">
                                <iframe width="560" height="315"
                                        src="https://www.youtube.com/embed/{{ $teacher->video_link }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>

                                <table class="popperhovertable">
                                    @isset($teacher->availability)
                                        @foreach($teacher->availability as $availability)
                                            <tr>
                                                <td width="30%"><b>{{ $availability['day'] }}</b></td>
                                                <td width="70%">{{ $availability['to_time'] }}
                                                    to {{ $availability['from_time'] }}</td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                </table>
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div>
        </div>
    </section>
</x-app-layout>
