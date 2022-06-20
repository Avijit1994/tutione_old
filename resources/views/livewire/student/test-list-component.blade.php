<div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Filter</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="mb-1">
                        {{ Form::label('subject_id', 'Subject', ['class' => 'col-sm-3 col-form-label']) }}
                        {{ Form::select('subject_id', $subjects, old('subject_id'), ['wire:model' => 'subject_id','class' => 'form-control','placeholder' => 'Pick a Subject']) }}
                        @error('subject_id') <span class="text-red">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @if (!empty($tests))
            @foreach ($tests as $test)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-file-text font-large-2 mb-1">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                            <h5 class="card-title">{{ $test->name }}</h5>
                            <p class="card-text">{{ $test->qusetion_type }}</p>
                            <a class="btn btn-primary btn-sm" href="{{ $test->file?Storage::disk('s3')->url($test->file):"" }}" target="_blank">Download</a>
                            <a class="btn btn-primary btn-sm" href="{{ route('student.test.intro',$test->id) }}">Start</a>
                            <a class="btn btn-primary btn-sm" href="{{ route('student.test.intro',$test->id) }}">Upload</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-center">No Data Found.</p>
        @endif
    </div>
    {{ $tests->links() }}
</div>
