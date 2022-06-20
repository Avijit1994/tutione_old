<x-app-layout>
    <section class="about-container">
        <div class="background-image">
            <img src="{{ asset('pub-assets/images/about-bg.png') }}" width="100%" alt="" />
        </div>
    </section>

    <section class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <h1 class="tu-title">About Us</h1>
                <div class="tu-about2">
                    <blockquote class="about-quote">Only Children Believe They’re Capable Of Everything <span>Paulo
                            Coelho</span></blockquote>
                    <p>
                        At TheTuitionE we strongly advocate author Paulo Coleho’s thoughts. Each child is gifted with
                        abilities unknown, until they are tuned with the right orchestration to remit proper rendition.
                        Here the role of a teacher
                        and a mentor comes imperative. TheTuitionE is here to bring the best teaching techniques through the
                        best educators to draw out the best from every pupil using a student friendly digital platform
                        while at the comfort
                        of home
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img width="100%" src="{{ asset('pub-assets/images/about-tutione-logo.png') }}" alt="" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="about-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('pub-assets/images/about-card-img.png') }}" alt="" />
                            <span class="ab-card-txt">Pedagogy</span>
                        </div>
                        <div class="flip-card-back">
                            <p>Imparting comprehensive learning of theoretical concepts through our esteemed
                                professionals.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="about-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('pub-assets/images/about-card-img2.png') }}" alt="" />
                            <span class="ab-card-txt">Methodologies</span>
                        </div>
                        <div class="flip-card-back">
                            <p>Teaching techniques are a right blend of teacher, learner, content and interaction.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="about-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('pub-assets/images/about-card-img3.png') }}" alt="" />
                            <span class="ab-card-txt">Learning Tools</span>
                        </div>
                        <div class="flip-card-back">
                            <p>Effective learning tools like communication, assessment, collaboration, assignments and
                                activity.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="about-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('pub-assets/images/about-card-img4.png') }}" alt="" />
                            <span class="ab-card-txt">Digital Media</span>
                        </div>
                        <div class="flip-card-back">
                            <p>TheTuitionE endeavors to make a pupil’s screen cognitive.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container vision-container">
            <div class="row">
                <div class="col-md-6 vision-img"><img src="{{ asset('pub-assets/images/about-2.png') }}" alt="" /></div>
                <div class="col-md-6 vision-text">
                    <h2 class="mb-4">Founder Message</h2>
                    <p>
                        Our vision is to present a learning environment dedicated towards achieving scholastic
                        brilliance across all sections of society. TheTuitionE is designed for easy access to quality
                        education within affordable limits.
                        We would like to share the role of every parent in choosing the right educational possibilities
                        for their ward through our team of competent educators to ensure they achieve and display
                        optimum potentiality.
                    </p>
                    <p>
                        TheTuitionE is committed to delivering curriculum appropriate tutoring services to students in the
                        GCC countries. Our teaching module encompasses imparting customized education with the required
                        amount of guidance in
                        areas where the students have been slow with their progress. Together, we aim to reach the
                        horizon.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="fact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 fact-counter">
                    <h1>500+</h1>
                    <span>Student Enrolled</span>
                </div>
                <div class="col-md-4 fact-counter">
                    <h1>200+</h1>
                    <span>Professional Teacher</span>
                </div>
                <div class="col-md-4 fact-counter">
                    <h1>10+</h1>
                    <span>Curriculum</span>
                </div>
            </div>
        </div>
    </section>

    <section class="join-container container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Want to Join the Team?</h1>
                <p class="join-team-text">Want to join the Team TheTuitionE Apply Now</p>
                <a href="{{ route('join-us.teacher') }}" class="btn btn-primary mr-2">Join as Teacher</a>
                <a href="{{ route('join-us.staff') }}" class="btn btn-outline-secondary">Join as Non Teaching Staff</a>
            </div>
        </div>
    </section>
</x-app-layout>
