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
                            <label for="">Search By Subject</label>
                            {{ Form::select('subject', $subjects, old('subject'), ['wire:model' => 'filter.subject','class' => 'form-control','placeholder' => 'Pick a Subject']) }}
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
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">List of new teachers</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered text-nowrap">
                            <thead>
                            <tr>
                                <th class="text-center">Image</th>
                                <th class="text-center">First Name</th>
                                <th class="text-center">Last Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center" style="width: 10%">Lead Status</th>
                                <th class="text-center" style="width: 10%">Active Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if (!empty($teachers))
                                @foreach ($teachers as $teacher)
                                    <tr onclick="window.location='{{ route('admin.teacher-new-join.show',$teacher->id) }}'">
                                        <td>
                                            <img
                                                src="{{ empty($teacher->image) ? $teacher->getUrlfriendlyAvatar(30) : asset('s3/30/30/'.$teacher->image) }}">
                                        </td>
                                        <td>{{ $teacher->first_name }}</td>
                                        <td>{{ $teacher->last_name }}</td>
                                        <td>{{ $teacher->email }}</td>
                                        <td>{{ $teacher->phone }}</td>
                                        <td>{{ $teacher->status }}</td>
                                        <td>
                                            <livewire:components.toggle-button :model="$teacher" :key="$teacher->id"/>
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
                    {{ $teachers->links('vendor/livewire/custom-bootstrap') }}
                </div>
            </div>
        </div>
    </div>
</div>
