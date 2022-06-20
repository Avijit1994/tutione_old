<x-app-layout>
    <div class="breadcrumb-container">
        <div class="container text-white breadcrumb-text">Home / Contact Us</div>
    </div>
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center text-white">
                    <h1>How We can Help You?</h1>
                    <p class="banner-text">Please feel free to reach out to us by filling in the questionnaire and we
                        shall get back to you as soon as possible.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="container contact-container">
        <div class="row">
            <div class="col-md-8 banner-box">
                <!-- Success message -->
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                <form action="{{ route('contact-us') }}" method="post">
                    @csrf
                    <div class="banner-card row">
                        <div class="alert alert-success contact-alert" role="alert"></div>
                        <div class="col-md-6 mb-2">
                            <label for="contact-name">Name </label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="name"
                                placeholder="Please Enter Your Name" />
                            @if ($errors->has('name'))
                                <div class="error">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="contact-email">Email </label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="email"
                                placeholder="Please Enter Your Email" />
                            @if ($errors->has('email'))
                                <div class="error">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-12">
                            <label for="contact-message">Message </label><span class="text-danger">*</span>
                            <textarea rows="5" class="form-control" name="message"
                                placeholder="Please Enter your Message"></textarea>
                            @if ($errors->has('message'))
                                <div class="error">
                                    {{ $errors->first('message') }}
                                </div>
                            @endif
                        </div>
                        <div class="text-center mt-3">
                            <button class="btn btn-primary" id="contact-submit">Submit</button>
                        </div>
                    </div>
                </form>
                <div class="mapgood">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.8943049143227!2d55.14159071488026!3d25.07157128395476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6d57688ffaad%3A0xa04a79a543d1c4a2!2sTutionE%20Technology%20FZE%20LLC%20(TheTuitione%20-%20Online%20Tuitions)!5e0!3m2!1sen!2sin!4v1650960535613!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 banner-box row address-box text-center">
                <div class="col-md-6">
                    <p>TuitionE Technology FZC LLC</p>
                    <p>Media City Free Zone, Dubai - UAE</p>
                </div>
                <div class="col-md-6">
                    <p>+971 (0) 56 153 0275</p>
                    <p>contacts@tutione.com</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
