<x-app-layout>
    <div class="breadcrumb-container">
        <div class="container text-white breadcrumb-text">Home / {{ $curriculum->name }}</div>
    </div>

    <div class="container">
        <h1 class="cbse">{{ $curriculum->name }}</h1>
    </div>

    <div class="innerbox">
        <img src="{{ $curriculum->banner_image ? asset('s3/' . $curriculum->banner_image) : 'https://via.placeholder.com/100' }}"
             alt="TheTuitione-logo-Online-Tuitions-Dubai" title="TheTuitione-logo-Online-Tuitions-Dubai">
    </div>
    <div class="container">
        <h4 class="grade">Grade</h4>
        <ul class="ulistbox">
            @foreach($curriculum->grades as $grade)
                <li><a href="{{ route('grade.detail',[$curriculum->slug, $grade->slug]) }}">{{ $grade->name }}</a></li>
            @endforeach
        </ul>
        <p class="lorem1">{!! $curriculum->description !!}</p>
    </div>

    <section class="join-container container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Register for Trial Class?</h1>
                <p class="join-team-text">Want to join the Team TheTuitionE Apply Now</p>
                <a href="{{ route('page','book-demo') }}" class="btn btn-outline-secondary">Join As a Student</a>
            </div>
        </div>
    </section>

</x-app-layout>
