<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br/>
    @endif
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="d-flex justify-content-between flex-column col-xl-4 col-21">
                    <div class="d-flex justify-content-start">
                        <span class="b-avatar badge-light-danger rounded" style="width: 104px; height: 104px;">
                            <span class="b-avatar-img">
                                <img
                                    src="{{ empty($student->image) ? $student->getUrlfriendlyAvatar(100) : asset('images/100/100/'.asset('s3/100/100'.$student->image)) }}"
                                    alt="avatar">
                            </span>
                        </span>
                        <div class="d-flex flex-column ml-1">
                            <div class="mb-1">
                                <h4 class="mb-0">{{ $student->name }}</h4>
                                <span class="card-text">{{ $student->email }}</span>
                            </div>
                            <div class="d-flex flex-wrap">
                                <a
                                    href="{{ route('admin.student-new-register.edit',$student->id) }}"
                                    class="btn btn-primary btn-sm" target="_self">
                                    Edit
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <select class="form-control" wire:model="status" wire:click="updateStatus({{$student}})">
                            <option>Select Status</option>
                            <option value="enquired">Enquired</option>
                            <option value="appointment">Appointment</option>
                            <option value="won">Won</option>
                            <option value="lost">Lost</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-4 col-12">
                    <table class="mt-2 mt-xl-0 w-100">
                        <tr>
                            <th class="pb-50"><span class="font-weight-bold">Curriculum</span></th>
                            <td class="pb-50">
                                {{ $student->studentDetails->implode('curriculam.name',',') }}
                            </td>
                        </tr>
                        <tr>
                            <th class="pb-50"><span class="font-weight-bold">Phone</span></th>
                            <td class="pb-50 text-capitalize">
                                {{ $student->phone }}
                            </td>
                        </tr>
                        <tr>
                            <th class="pb-50"><span class="font-weight-bold">Grade</span></th>
                            <td class="pb-50 text-capitalize">
                                {{ $student->studentDetails->implode('grade.name',',') }}
                            </td>
                        </tr>
                        <tr>
                            <th><span class="font-weight-bold">Register Date</span></th>
                            <td>
                                {{ $student->created_at }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                    wire:ignore
                    role="tab" aria-controls="home" aria-selected="true">New Note
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                    wire:ignore
                    role="tab" aria-controls="profile" aria-selected="false">Log Activity
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                    wire:ignore
                    role="tab" aria-controls="contact" aria-selected="false">Create Task
            </button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" wire:ignore>
            <form wire:submit.prevent="storeNote">
                <label for="exampleFormControlTextarea1"></label>
                <textarea class="form-control" wire:model="note" rows="3"></textarea>
                @error('note') <span class="error">{{ $message }}</span> @enderror
                <button class="btn btn-primary mt-2" type="submit">Submit</button>
            </form>
            <br>
            <ul class="timeline">
                @foreach($teacher_notes as $teacher_note)
                    <li class="timeline-item">
                        <span class="timeline-point timeline-point-indicator"></span>
                        <div class="timeline-event">
                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-1">
                                @if($teacher_note->status=='pending')
                                    <button class="btn btn-primary btn-sm"
                                            wire:click="updateNoteStatus({{ $teacher_note }},'completed')">Mark Complete
                                    </button>
                                @else
                                    <button class="btn btn-primary btn-sm">Complete</button>
                                @endif
                                <span class="timeline-event-time">{{ $teacher_note->created_at }}</span>
                            </div>
                            <img class="me-1"
                                 src="{{ empty(auth()->user()->image) ? auth()->user()->getUrlfriendlyAvatar(69) : asset('images/100/100/'.auth()->user()->image) }}"
                                 alt="invoice"
                                 height="23"><span
                                class="user-name fw-bolder">{{ auth()->user()->name }}</span>
                            <p>{{ $teacher_note->note }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" wire:ignore>
            <form wire:submit.prevent="storeActivity">
                <div class="row">
                    <div class="col-md-6">
                        <select class="form-control" wire:model="activity_status">
                            <option>Select Status</option>
                            <option value="call">Call</option>
                            <option value="meeting">Meeting</option>
                            <option value="interaction">Interaction</option>
                            <option value="mail">Mail</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <input type="datetime-local" class="form-control" wire:model="activity_date"/>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <textarea class="form-control" wire:model="activity" rows="3"></textarea>
                    </div>
                </div>
                @error('activity') <span class="text-red">{{ $message }}</span>@enderror
                <button class="btn btn-primary mt-2" type="submit">Submit</button>
            </form>
            <br>
            <ul class="timeline">
                @foreach($teacher_activities as $teacher_activity)
                    <li class="timeline-item">
                        <span class="timeline-point timeline-point-indicator"></span>
                        <div class="timeline-event">
                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-1">
                                @if($teacher_activity->status == 'pending')
                                    <button class="btn btn-primary btn-sm"
                                            wire:click="updateActivityStatus({{ $teacher_activity }},'completed')">Mark
                                        Complete
                                    </button>
                                @else
                                    <button class="btn btn-primary btn-sm">Complete</button>
                                @endif
                                <span class="timeline-event-time">{{ $teacher_activity->created_at }}</span>
                            </div>
                            <img class="me-1"
                                 src="{{ empty(auth()->user()->image) ? auth()->user()->getUrlfriendlyAvatar(69) : asset('images/100/100/'.auth()->user()->image) }}"
                                 alt="invoice"
                                 height="23"><span
                                class="user-name fw-bolder">{{ auth()->user()->name }}</span>
                            <p>{{ $teacher_activity->activity }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab" wire:ignore>
            <form wire:submit.prevent="storeTask">
                <div class="row">
                    <div class="col-md-6">
                        <select class="form-control" wire:model="task_assign">
                            <option>Assign To</option>
                            <option value="call">Call</option>
                            <option value="meeting">Meeting</option>
                            <option value="interaction">Interaction</option>
                            <option value="mail">Mail</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <input type="datetime-local" class="form-control" wire:model="activity_date"/>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <textarea class="form-control" wire:model="task" rows="3"></textarea>
                    </div>
                </div>
                @error('task') <span class="text-red">{{ $message }}</span>@enderror
                <button class="btn btn-primary mt-2" type="submit">Submit</button>
            </form>
            <br>
            <ul class="timeline">
                @foreach($teacher_tasks as $teacher_task)
                    <li class="timeline-item">
                        <span class="timeline-point timeline-point-indicator"></span>
                        <div class="timeline-event">
                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                @if($teacher_activity->status=='pending')
                                    <button class="btn btn-primary mt-2"
                                            wire:click="updateActivityStatus({{ $teacher_activity }},'completed')">Mark
                                        Complete
                                    </button>
                                @else
                                    <button class="btn btn-primary mt-2">Complete</button>
                                @endif
                                {{--                                <img class="me-1" src="../../../app-assets/images/icons/file-icons/pdf.png"--}}
                                {{--                                     alt="invoice"--}}
                                {{--                                     height="23">--}}
                                <span class="timeline-event-time">{{ $teacher_task->teacher_task }}</span>
                            </div>
                            <p>{{ $teacher_task->created_at }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
