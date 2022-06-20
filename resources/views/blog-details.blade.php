<x-app-layout>
    <div class="breadcrumb-container">
        <div class="container text-white breadcrumb-text">Home / Blog Details</div>
    </div>

    <section class="banner-section vbhty">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center text-white">
                    <h1>Blog Details</h1>
                    <p></p>
                </div>
            </div>
        </div>
    </section>

    <div class="boclbox">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="imgboxb">
                        <img src="{{ asset('s3/500/500/'.$blog->image) }}">
                    </div>
                    <div class="textfg">
                        <h4>{{ $blog->name }}</h4>
                        <h6>by TheTuitionE - on {{ $blog->created_at }}</h6>
                        {!! $blog->description !!}
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="textfg1">
                        <h3>Recent Blogs</h3>
                        <ul>
                            @foreach($recentBlogs as $recentBlog)
                                <li>
                                    <a href="{{ route('blog.detail',$recentBlog->slug) }}">
                                    <span class="imgblog">
                                        <img src="{{ asset('s3/500/500/'.$recentBlog->image) }}">
                                    </span>
                                        <span class="textblog">
                                        {{ $recentBlog->name }}
                                    </span>
                                        <div class="clearfix"></div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="textfg1">
                        <h3>5 Similar Blogs</h3>
                        <ul>
                            @foreach($similarBlogs as $similarBlog)
                                <li>
                                    <a href="{{ route('blog.detail',$similarBlog->slug) }}">
                                    <span class="imgblog">
                                        <img src="{{ asset('s3/500/500/'.$similarBlog->image) }}">
                                    </span>
                                        <span class="textblog">
                                        {{ $similarBlog->name }}
                                    </span>
                                        <div class="clearfix"></div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="textfg1">
                        <h3>Most Common Tags</h3>
                        <ul>
                            @foreach(explode(',',$blog->tag) as $tag)
                                <li>- {{ $tag }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
