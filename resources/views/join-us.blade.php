<x-app-layout>

    <div class="breadcrumb-container">
        <div class="container text-white breadcrumb-text">Home / Join Us</div>
    </div>

    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center text-white">
                    <h1>Join Our Team</h1>
                    <p class="banner-text">
                        TheTuitionE is always on the lookout for individuals who possess the zeal to grow and a passion
                        towards teaching. If you feel you are one such being, feel free to connect with us with the
                        details below and we shall
                        get back to you soon.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="container contact-container">
        <div class="row">
            <div class="col-md-9 banner-box">
                <div class="banner-card row">
                    <div class="join-welcome-col" style="margin-left: auto; margin-right: auto;">
                        <a class="btn btn-join-us teacher-join-bg" data-toggle="modal" data-target="#joinModal"
                            href="#">
                            <img src="{{ asset('pub-assets/images/teacher.png') }}" alt="" />
                            <span class="join-btn-span">Join as</span>
                            <div class="join-btn-text">Teacher</div>
                        </a>
                        <a class="btn btn-join-us staff-join-bg" data-toggle="modal" data-target="#joinModal2" href="#">
                            <img src="{{ asset('pub-assets/images/non-teaching.png') }}" alt="" />
                            <span class="join-btn-span2">Join as</span>
                            <div class="join-btn-text2">Non Teaching Staff</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="joinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Brefore you Proceed</h5>
                </div>
                <div class="modal-body">
                    <p><strong>Following details to be uploaded by all teachers</strong></p>

                    <ol>
                        <li>All certificates from ICSE/CBSE/Board-10th level upto highest qualification</li>
                        <li>All documents should be in PDF format</li>
                        <li>
                            Please check documents before submitting as process cannot be reversed
                        </li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="{{ route('join-us.teacher') }}" class="btn btn-primary">Continue</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="joinModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Brefore you Proceed</h5>
                </div>
                <div class="modal-body">
                    <p><strong>Please Keep All the Documents Ready With You before proceeding to Apply</strong></p>

                    <ol>
                        <li>Please upload your resume. Ensure that your resume is short and contains the notable areas
                            of your profile.</li>
                        <li>Maximum size of document 2 MB</li>
                        <li>Document should be in pdf or word document format</li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="{{ route('join-us.staff') }}" class="btn btn-primary">Continue</a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
