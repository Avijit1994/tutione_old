<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Filter</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Search By Curriculum</label>
                            {{ Form::select('curriculum', $curriculams, old('curriculum'), ['wire:model' => 'filter.curriculum','class' => 'form-control','placeholder' => 'Pick a curriculum']) }}
                        </div>

                        <div class="col-md-2">
                            <label for="">Search By Grade</label>
                            {{ Form::select('grade', $grades, old('grade'), ['wire:model' => 'filter.grade','class' => 'form-control','placeholder' => 'Pick a Grade']) }}
                        </div>


                        <div class="col-md-2">
                            <label for="">Search By Name</label>
                            {{ Form::text('name', old('name'), ['wire:model' => 'filter.name','class' => 'form-control','placeholder' => 'Enter Name']) }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">{{ $subTitle }}</h3>
            <div class="card-tools float-right">
                <a href="{{ route('admin.subject.create') }}" class="btn btn-primary">Add subject</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered text-nowrap">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Curriculum</th>
                        <th>Grade</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th style="width: 10%">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(!empty($subjects))
                        @foreach ($subjects as $subject)
                            <tr onclick="window.location='{{ route('admin.subject.edit',$subject->id) }}'">
                                <td><img src="{{ asset('s3/30/30/'.$subject->image) }}" alt=""></td>
                                <td>{{ optional(optional($subject->grade)->curriculam)->name }}</td>
                                <td>{{ optional($subject->grade)->name }}</td>
                                <td>{{ $subject->name }}</td>
                                <td>{{ $subject->slug }}</td>
                                <td>
                                    <livewire:components.toggle-button :model="$subject" :key="$subject->id"/>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="100%" class="text-center">No Data Found.</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
            {{ $subjects->links('vendor/livewire/custom-bootstrap') }}
        </div>
    </div>
</div>
