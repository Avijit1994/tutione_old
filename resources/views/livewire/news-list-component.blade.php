<div>
    <section class="container news-section">
        <div class="row mb-5">
            <div class="col-md-4">
                <a href="{{ route('page',['news','type=press-release']) }}">
                    <div class="topic-card"
                         style="background-image: url('{{ asset('pub-assets/images/pr_news.png') }}');">
                        <span class="topic-text">Press Release</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('page',['news','type=tutione-news']) }}">
                    <div class="topic-card"
                         style="background-image: url('{{ asset('pub-assets/images/news-card.png') }}');">
                        <span class="topic-text">TheTuitionE in News</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('page',['news','type=media']) }}">
                    <div class="topic-card"
                         style="background-image: url('{{ asset('pub-assets/images/media-news.png') }}');">
                        <span class="topic-text">Media</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            @foreach($news as $news)
                <div class="col-md-6 mb-4">
                    <div class="openNewsModal" wire:click="showModal({{$news}})" data-toggle="modal" data-target="#myModal">
                        <div class="news-card">
                            <div class="news-img">
                                <img src="{{ asset('s3/500/500/'.$news->image) }}" alt=""/>
                            </div>
                            <div class="news-title">{{ $news->title }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

        <div wire:ignore.self class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src=" {{ $large_image??'' }} "  width="100%" alt=""/>
                    </div>
                </div>
            </div>
        </divwire:ignore.self>
</div>
