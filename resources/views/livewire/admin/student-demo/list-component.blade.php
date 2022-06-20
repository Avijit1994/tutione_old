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
            <h3 class="card-title">Trial Class</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered text-nowrap">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Curriculum</th>
                        <th>Grade</th>
                        <th style="width: 10%">Status</th>
{{--                        <th>Action</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @if(!empty($studentDemos))
                        @foreach ($studentDemos as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ empty($student->image) ? $student->getUrlfriendlyAvatar(30) : asset('images/100/100/'.asset('s3/100/100'.$student->image)) }}">
                                </td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ optional(optional($student->studentDetail)->curriculam)->name }}</td>
                                <td>{{ optional(optional($student->studentDetail)->grade)->name }}</td>
                                <td>{{ Str::camel($student->status) }}</td>
{{--                                <td class="text-end">--}}
{{--                                    <form action="{{ route('admin.student-demo.destroy',$student->id) }}" method="POST">--}}
{{--                                        <a class="btn btn-sm btn-primary"--}}
{{--                                           href="{{ route('admin.student-demo.show',$student->id) }}">View</a>--}}
{{--                                        <a class="btn btn-sm btn-primary"--}}
{{--                                           href="{{ route('admin.student-demo.edit',$student->id) }}">Edit</a>--}}
{{--                                        @csrf--}}
{{--                                        @method('DELETE')--}}
{{--                                        <button type="submit"--}}
{{--                                                onclick="return confirm('Are you sure to delete this item?')"--}}
{{--                                                class="btn btn-sm btn-danger">Delete--}}
{{--                                        </button>--}}
{{--                                    </form>--}}
{{--                                </td>--}}
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
            {{ $studentDemos->links('vendor/livewire/custom-bootstrap') }}
        </div>
    </div>
</div>
