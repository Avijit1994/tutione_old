<div>
    <div class="row">
        <div class="col-md-12 banner-box">
            <form id="find_teacher_form" action="{{ route('teacher') }}">
                <div class="banner-card row">
                    <div class="col-md-10 row teacher-search-row">
                        <div class="col-md-4 search-parameter form-group">
                            <select wire:model="curriculum" name="curriculum" class="form-control" data-placeholder="Select Curriculum">
                                <option value="" selected>Select Curriculum</option>
                                @foreach ($curriculums as $curriculum)
                                    <option value="{{ $curriculum->slug }}">{{ $curriculum->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 search-parameter form-group">
                            <select wire:model="grade" name="grade" class="form-control" data-placeholder="Select Grade">
                                <option value="" selected>Select Grade</option>
                                @foreach ($grades as $grade)
                                    <option value="{{ $grade->slug }}">{{ $grade->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 search-parameter form-group">
                            <select wire:model="subject" name="subject" class="form-control" data-placeholder="Select Subject">
                                <option value="" selected>Select Subject</option>
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->slug }}">{{ $subject->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button id="do_find_teacher" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
