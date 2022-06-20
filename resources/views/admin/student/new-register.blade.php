<x-admin-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">{{ $subTitle }}</h3>
            <div class="card-tools float-right">
                {{--                             <a href="{{ route('admin.student.create') }}" class="btn btn-primary">Add Lead</a>--}}
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm table-hover table-bordered text-nowrap">
                    <thead>
                    <tr>
                        <th class="text-center">Image</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Mobile</th>
                        <th class="text-center">Curriculum</th>
                        <th class="text-center">Grade</th>
                        <th class="text-center" style="width: 10%">Lead Status</th>
                        <th class="text-center" style="width: 10%">Active Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(!empty($students))
                        @foreach ($students as $student)
                            <tr>
                                <td>
                                    <img src="{{ $student->image ? asset('s3/30/30/'.$student->image) : $student->getUrlfriendlyAvatar(30) }}">
                                </td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>{{ optional(optional($student->studentDetail)->curriculam)->name }}</td>
                                <td>{{ optional(optional($student->studentDetail)->grade)->name }}</td>
                                <td>{{ Str::camel($student->status) }}</td>
                                <td>
                                    <livewire:components.toggle-button :model="$student" :key="$student->id" />
                                </td>
                                <td class="text-right">
                                    <form action="{{ route('admin.student.destroy',$student->id) }}"
                                          method="POST">
                                        <a class="btn btn-sm btn-primary"
                                           href="{{ route('admin.student-new-register.show',$student->id) }}">View</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure to delete this item?')" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
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
            {{ $students->links() }}
        </div>
    </div>
</x-admin-layout>
