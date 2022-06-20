<div>
    @if ($currentStep == 1)
        <div class="texvb">
            <a href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
            <h2>Which <span>Curriculum</span> are you looking for?</h2>
            <ul class="listb">
                @foreach($curriculams as $curriculam)
                    <li>
                        <label href="#">{{ $curriculam->name }}
                            <input type="radio" wire:model="curriculam" value="{{ $curriculam->id }}" name="curriculam">
                            <span class="checkmark"></span>
                        </label>
                    </li>
            @endforeach
        </div>
    @endif
    @if ($currentStep == 2)
        <div class="texvb">
            <a href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
            <h2>Which <span>grade</span> would you like help with?</h2>
            <ul class="listb">
                @foreach($grades as $grade)
                    <li>
                        <label href="#">{{ $grade->name }}
                            <input type="radio" wire:model="grade" value="{{ $grade->id }}" name="grade">
                            <span class="checkmark"></span>
                        </label>
                    </li>
            @endforeach
        </div>
    @endif
    @if ($currentStep == 3)
        <div class="texvb">
            <a href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
            <h2 class="mb-3">Great And what's your main <span> goal?</span></h2>

            <div class="row">
                <div class="col-md-3">
                    <div class="ba12">
                        <img src="{{ asset('assets/images/grade.png') }}">
                        <label href="#">Improve Grades
                            <input type="radio" wire:model="goal" value="Improve Grades" name="goal">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ba12">
                        <img src="{{ asset('assets/images/boost.png') }}">
                        <label href="#">Boost Confidence
                            <input type="radio" wire:model="goal" value="Boost Confidence" name="goal">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ba12">
                        <img src="{{ asset('assets/images/presentation.png') }}">
                        <label href="#">Prep For Exams
                            <input type="radio" wire:model="goal" value="Prep For Exams" name="goal">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ba12">
                        <img src="{{ asset('assets/images/subject.png') }}">
                        <label href="#">Fill In Subject Gaps
                            <input type="radio" wire:model="goal" value="Fill In Subject Gaps" name="goal">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if ($currentStep == 4)
        <div class="texvb">
            <a href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
            <h2 class="mb-3">Are you a parent or <span>student?</span></h2>
            <ul class="listb1">
                <li>
                    <label href="#">Parent/bill payer
                        <input type="radio" wire:model="type" value="parent" name="type">
                        <span class="checkmark"></span>
                    </label>
                </li>
                <li>
                    <label href="#">Student
                        <input type="radio" wire:model="type" value="student" name="type">
                        <span class="checkmark"></span>
                    </label>
                </li>
            </ul>
        </div>
    @endif
    @if ($currentStep == 5)
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
            @endif
        <div class="texvb">
            <a href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
            <h2 class="mb-3">And what’s your <span>full name?</span></h2>
            <form wire:submit.prevent="fifthStepSubmit">
                <input class="namebn" type="text" wire:model="fullName" placeholder="Type your full name">
                <button class="btn btn-primary mt-3" type="submit">Next</button>
            </form>
        </div>
    @endif
    @if ($currentStep == 6)
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
            @endif
        <div class="texvb">
            <a href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
            <h2 class="mb-3">Nice to meet you <span>{{ $fullName }}.</span> And what’s your email?</h2>
            <form wire:submit.prevent="sixthStepSubmit">
                <input class="namebn" type="email" wire:model="email" placeholder="Type your email address">
                <button class="btn btn-primary mt-3" type="submit">Next</button>
            </form>
        </div>
    @endif
    @if ($currentStep == 7)
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
            @endif
        <div class="texvb">
            <a href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
            <h2 class="mb-3">Your phone <span>number</span></h2>
            <form wire:submit.prevent="seventhStepSubmit">
                <input class="namebn" type="number" wire:model="phone" placeholder="Type their phone number">
                <button class="btn btn-primary mt-3" type="submit">Next</button>
            </form>
        </div>
    @endif
    @if ($currentStep == 8)
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br/>
        @endif
        <div class="texvb">
            <a href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
            <h2 class="mb-3">Create a quick <span>Password</span> </h2>
            <form wire:submit.prevent="eighthStepSubmit">
                <input class="namebn" type="password" wire:model="password" placeholder="Password (Min 8 characters)">
                <button class="btn btn-primary mt-3" type="submit">Finish</button>
            </form>
        </div>
    @endif
</div>
