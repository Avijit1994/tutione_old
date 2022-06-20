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
    <section class="container contact-container ">
        <div class="row mtbox12">
            <div class="col-md-12 col-lg-12">
                <div class="vfgb">
                    <div class="row ">
                        <div class="col-md-5 col-lg-3">
                            <div class="bnfg cft">
                                <a href="{{ route('teacher.details',$teacher->id) }}">
                                    <img src="{{ asset('s3/200/200/' . $teacher->image) }}">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-8 d-flex1">
                            <div class="textbm">
                                <h3>{{ $teacher->first_name.' '.$teacher->last_name }}</h3>
                                <p>{{ $teacher->profile_headline }}</p>
                                <h5><b>Nationality :</b> Sudan</h5>
                                <h5><b>Languages Known :</b> Arabic , English</h5>
                                <a class="btn login-btn1 mt-4" href="{{ route('page',[ 'book-demo','curriculum'=>request()->curriculam,'grade'=>request()->grade,'subject[]'=>request()->subject,'teacher'=>$teacher->id]) }}">Book Class</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="textbox12">
                    <h4>Biography</h4>
                    <p>{{ $teacher->about }}</p>
                    <table class="popperhovertable">

                        <tbody>
                        @foreach($teacher->availability as $availability)
                            <tr>
                                <td width="30%"><b>{{ $availability['day'] }}</b></td>
                                <td width="70%">{{ $availability['to_time'] }} to {{ $availability['from_time'] }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
