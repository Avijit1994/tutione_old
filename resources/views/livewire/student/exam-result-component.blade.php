<div>
    <section class="backgroundimages">
        <div class="container">
            <div class="imagesbox123">
                <div class="gtbox">
                    <a class="backtohome" href="{{ route('student.dashboard') }}">back to home</a>
                </div>
                <div class="text-center">
                    <img class="img1" src="{{ asset('logo.png') }}">
                </div>
                <div class="text-center">
                    <h3 class="congratulations">Congratulations on Completing
                        <span>Your Mock Test on Time!</span>
                    </h3>

                    <h4 class="nest123">What Next?</h4>
                </div>

                <div class="arrow1 text-center">
                    <img src="{{ asset('pub-assets/images/step1.png') }}">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="textleft">
                            <h2 class="steponebox">Step1</h2>
                            <h5>Get offline assessment <br> at 10 aed
                                <button class="senre1" wire:click="save_ten_aed">Send for Review
                                </button>
                            </h5>
                            <h6>[or]</h6>
                            <h5>Get one on one review with teacher <br> at 25 aed
                                <button
                                    class="senre1" wire:click="save_twenty_five_aed">Send for Review
                                </button>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="textleft text-center float-right">
                            <h2 class="steponebox">Step2</h2>
                            <h5>Share with your Friends <br> to earn free assessment</h5>
                            <a class="mtbox" target="_blank"
                               href="https://api.whatsapp.com/send?text={{ route('login',['id'=>auth()->user()->id]) }}">
                                <img src="{{ asset('pub-assets/images/what1.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
