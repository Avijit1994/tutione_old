<x-student-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">Knowledge Base</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Pages</a>
                            </li>
                            <li class="breadcrumb-item active">Knowledge Base
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
            <div class="mb-1 breadcrumb-right">
                <div class="dropdown">
                    <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Knowledge base Jumbotron -->
        <section id="knowledge-base-search">
            <div class="row">
                <div class="col-12">
                    <div class="card knowledge-base-bg text-center" style="background-image: url('{{ asset('app-assets/images/banner/banner.png') }}')">
                        <div class="card-body">
                            <h2 class="text-primary">Practice to Perfection</h2>
                            <p class="card-text mb-2">
                                We are glad to help our students embark upon a new journey each day.
                                Our endeavor is to make learning attractive and fascinating.  Team TheTuitionE strives to unravel new opportunities for students to develop their skills and inculcate better learning.
                                Please find our first set of MOCK TEST series made available for our budding students appearing for Semester II in April 2022.
                                We shall be coming up with more test series soon, to get you enough practice before your boards.
                                Good luck and happy learning!
                            </p>
                            <form class="kb-search-input">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i data-feather="search"></i></span>
                                    <input type="text" class="form-control" id="searchbar" placeholder="Ask a question..." />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Knowledge base Jumbotron -->

        <!-- Knowledge base -->
        <section id="knowledge-base-content">
            <div class="row kb-search-content-info match-height">
                <!-- sales card -->
                <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                    <div class="card">
                        <a href="{{ route('student.test.index') }}">
                            <img src="{{ asset('app-assets/images/illustration/sales.svg') }}" class="card-img-top" alt="knowledge-base-image" />

                            <div class="card-body text-center">
                                <h4>CBSE Mock Test</h4>
                                <p class="text-body mt-1 mb-0">
                                    In order to help students get more practice in areas of improvement, and prepare better for CBSE class X, 2022 TuitionE has come up with a series of test, the first series is made available online.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- marketing -->
                <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                    <div class="card">
                        <a href="{{ route('student.dashboard') }}">
                            <img src="{{ asset('app-assets/images/illustration/marketing.svg') }}" class="card-img-top" alt="knowledge-base-image" />
                            <div class="card-body text-center">
                                <h4>Test you logical thinking skills</h4>
                                <p class="text-body mt-1 mb-0">
                                    Our endeavor is to make learning attractive and fascinating.  Team TheTuitionE strives to unravel new opportunities for students to develop their skills and inculcate better learning.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- api -->
                <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                    <div class="card">
                        <a href="{{ route('student.dashboard') }}">
                            <img src="{{ asset('app-assets/images/illustration/api.svg') }}" class="card-img-top" alt="knowledge-base-image" />
                            <div class="card-body text-center">
                                <h4>Solve the Riddle</h4>
                                <p class="text-body mt-1 mb-0">Please find our first set of MOCK TEST series made available for our budding students appearing for Semester II in April 2022.</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- personalization -->
                <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                    <div class="card">
                        <a href="{{ route('student.dashboard') }}">
                            <img src="{{ asset('app-assets/images/illustration/personalization.svg') }}" class="card-img-top" alt="knowledge-base-image" />
                            <div class="card-body text-center">
                                <h4>Mentoring support</h4>
                                <p class="text-body mt-1 mb-0">We shall be coming up with more test series soon, to get you enough practice before your boards.
                                    Good luck and happy learning!</p>
                            </div>
                        </a>
                    </div>
                </div>

{{--                <!-- email -->--}}
{{--                <div class="col-md-4 col-sm-6 col-12 kb-search-content">--}}
{{--                    <div class="card">--}}
{{--                        <a href="{{ route('student.dashboard') }}">--}}
{{--                            <img src="{{ asset('app-assets/images/illustration/email.svg') }}" class="card-img-top" alt="knowledge-base-image" />--}}
{{--                            <div class="card-body text-center">--}}
{{--                                <h4>Email Marketing</h4>--}}
{{--                                <p class="text-body mt-1 mb-0">We shall be coming up with more test series soon, to get you enough practice before your boards.--}}
{{--                                    Good luck and happy learning!</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- demand -->--}}
{{--                <div class="col-md-4 col-sm-6 col-12 kb-search-content">--}}
{{--                    <div class="card">--}}
{{--                        <a href="{{ route('student.dashboard') }}">--}}
{{--                            <img src="{{ asset('app-assets/images/illustration/demand.svg') }}" class="card-img-top" alt="knowledge-base-image" />--}}
{{--                            <div class="card-body text-center">--}}
{{--                                <h4>Demand Generation</h4>--}}
{{--                                <p class="text-body mt-1 mb-0">Competent means we will never take anything for granted.</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <!-- no result -->
                <div class="col-12 text-center no-result no-items">
                    <h4 class="mt-4">Search result not found!!</h4>
                </div>
            </div>
        </section>
        <!-- Knowledge base ends -->

    </div>
</x-student-layout>
