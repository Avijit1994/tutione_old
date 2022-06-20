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
                {{-- <a href="{{ route('admin.student.create') }}" class="btn btn-primary">Add student</a> --}}
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered text-nowrap">
                    <thead>
                        <tr>
                            <th class="text-center">Test Name</th>
                            <th class="text-center">Question Type</th>
                            <th class="text-center">Curriculam</th>
                            <th class="text-center">Grade</th>
                            <th class="text-center">Subject</th>
                            <th class="text-center">Student Name</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($studentTests))
                            @foreach ($studentTests as $studentTest)
                                <tr>
                                    <td>{{ optional($studentTest->test)->name }}</td>
                                    <td>{{ optional($studentTest->test)->question_type }}</td>
                                    <td>{{ optional(optional($studentTest->test)->curriculam)->name }}</td>
                                    <td>{{ optional(optional($studentTest->test)->grade)->name }}</td>
                                    <td>{{ optional(optional($studentTest->test)->subject)->name }}</td>
                                    <td>{{ optional($studentTest->student)->name }}</td>
                                    <td>{{ optional($studentTest->student)->name }}</td>
                                    <td class="text-right">
                                        <a class="btn btn-sm btn-primary" href="{{ route('admin.student-test.show', $studentTest->id) }}">View</a>
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
            {{ $studentTests->links() }}
        </div>
    </div>
</x-admin-layout>
