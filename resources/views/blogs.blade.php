<x-app-layout>
    <div class="breadcrumb-container">
        <div class="container text-white breadcrumb-text">Home / Blog</div>
    </div>
    <div class="cricelbox">
        <div class="container">
            <div class="text-left">
                <h2 class="mb-4">Recent Blogs</h2>
            </div>
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-6 col-lg-3">
                        <div class="boxcricel">
                            <div class="img-cricel">
                                <a href="{{ route('blogs', ['category' => $category->slug]) }}">
                                    <img src="{{ asset('s3/500/500/'.$category->image) }}" alt="">
                                </a>
                            </div>
                            <div class="text-cricel">
                                <h3>{{ $category->name }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <section class="container blog-container">
        <h3 class="section-title">Recent Blogs</h3>
        <div class="row">
            @foreach($blogs as $blog)
                <a class="blog-link col-md-3" href="{{ route('blog.detail',$blog->slug) }}">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('s3/500/500/'.$blog->image) }}" alt=""/>
                        </div>
                        <div class="blog-card-body">
                            <h2 class="blog-title">{{ $blog->name }}</h2>
                            <span class="blog-author">by TheTuitionE</span>
                            <span class="blog-card-misc">Pulished On</span>
                            <span class="blog-publish-date">{{ $blog->created_at }}</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

    <section class="join-container container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Subscribe Newsletter</h1>
                <p class="subscribe-text">Look into this space to find a melting pot of present-day thoughts and
                    creative ideas juxtapose to unravel newer avenues in learning and teaching.</p>
                <input type="email" placeholder="Please Enter Your Email" class="form-control subscribe-input"/>
                <button class="btn btn-primary">Subscribe</button>
            </div>
        </div>
    </section>
</x-app-layout>
