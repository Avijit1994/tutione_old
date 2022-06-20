<div>
    <form wire:submit.prevent enctype="multipart/form-data">
        <section class="backgroundimages">
            <div class="container">
                <div class="bonbox">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-left">
                                <img class="logodf" src="{{ asset('logo.png') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center" x-data="appFooterComponent()" x-init="init()">
                                <div class="time1" x-data="timer(new Date().setDate(new Date().getDate() + 1))"
                                     x-init="init();">
                                    <span x-text="time().days"></span>:
                                    <span x-text="time().hours"></span>:
                                    <span x-text="time().minutes"></span>:
                                    <span x-text="time().seconds"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pot bfgbox">
                                    @foreach ($testQuestions as $testQuestion)
                                        @if ($testQuestion->question_type == 'written')
                                            {!! $testQuestion->name !!}
                                        @else
                                            <div class="row">
                                                <div class="col-md-12">
                                                    {!! $testQuestion->name !!}
                                                </div>
                                            </div>
                                            <div class="row">
                                                @foreach ($testQuestion->option as $option)
                                                    <div class="col-md-6">
                                                        <div class="gbh">
                                                            <input value="option_{{ $loop->iteration }}" type="radio"
                                                                   wire:model="answer"
                                                                   wire:click="give_answer">
                                                            {{ $loop->iteration }}.</span> {{ $option }}
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-5">
                            <div class="text-center upboxc">
                                <h4>Step 1: Merge your Document here</h4>
                                <a href="https://smallpdf.com/jpg-to-pdf">Merge</a>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="upboxc text-center">
                                <h4>Step 2: Upload Merged Document</h4>
                                <input name="file-upload-field" type="file" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-2 text-right">
                            <div class="fg">
                                @if ($testQuestions->hasMorePages())
                                    <button wire:click="nextPage" wire:loading.attr="disabled" rel="next"
                                            class="next12">
                                        Next
                                    </button>
                                @else
                                    <button wire:click="finish" class="next12"> Finish</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</div>

<script>
    function appFooterComponent() {
        return {
            time: new Date(),
            init() {
                setInterval(() => {
                    this.time = new Date();
                }, 1000);
            },
            getTime() {
                return moment(this.time).format('HH:mm:ss')
            },
        }
    }

    function timer(expiry) {
        return {
            expiry: expiry,
            remaining: null,
            init() {
                this.setRemaining()
                setInterval(() => {
                    this.setRemaining();
                }, 1000);
            },
            setRemaining() {
                const diff = this.expiry - new Date().getTime();
                this.remaining = parseInt(diff / 1000);
            },
            days() {
                return {
                    value: this.remaining / 86400,
                    remaining: this.remaining % 86400
                };
            },
            hours() {
                return {
                    value: this.days().remaining / 3600,
                    remaining: this.days().remaining % 3600
                };
            },
            minutes() {
                return {
                    value: this.hours().remaining / 60,
                    remaining: this.hours().remaining % 60
                };
            },
            seconds() {
                return {
                    value: this.minutes().remaining,
                };
            },
            format(value) {
                return ("0" + parseInt(value)).slice(-2)
            },
            time() {
                return {
                    days: this.format(this.days().value),
                    hours: this.format(this.hours().value),
                    minutes: this.format(this.minutes().value),
                    seconds: this.format(this.seconds().value),
                }
            },
        }
    }

</script>
