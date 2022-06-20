<x-admin-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">{{ $subTitle }}</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered text-nowrap">
                    <thead>
                    <tr>
                        <th class="text-center">Test Name</th>
                        <th class="text-center">Question Type</th>
                        <th class="text-center">Curriculum</th>
                        <th class="text-center">Grade</th>
                        <th class="text-center">Subject</th>
                        <th class="text-center">Student Name</th>
                        <th class="text-center">Review Type</th>
                        <th class="text-center">Review Status</th>
                        <th class="text-center">Review File</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (!empty($studentTests))
                        @foreach ($studentTests as $studentTest)
                            <tr>
                                <td>{{ $studentTest->test->name }}</td>
                                <td>{{ $studentTest->test->question_type }}</td>
                                <td>{{ $studentTest->test->curriculam->name }}</td>
                                <td>{{ $studentTest->test->grade->name }}</td>
                                <td>{{ $studentTest->test->subject->name }}</td>
                                <td>{{ optional($studentTest->student)->name }}</td>
                                <td>{{ $studentTest->review_type }}</td>
                                <td>{{ $studentTest->review }}</td>
                                <td><a target="_blank" href="{{ \Illuminate\Support\Facades\Storage::disk('s3')->url($studentTest->studentTestDetails->get(0)->answer) }}">Download</a></td>
                                <td class="text-right">
                                    @if ($studentTest->review == 'request')
                                        <form action="{{ route('admin.student-test.update', $studentTest->id) }}"
                                              method="POST">
                                            @method('PUT')
                                            @csrf
                                            <input class="btn btn-danger btn-sm" type="submit" name="review" value="reject">
                                            <input class="btn btn-success btn-sm" type="submit" name="review" value="approve">
                                        </form>
                                    @else
                                        <a class="btn btn-primary btn-sm"
                                           href="{{ route('admin.student-test.show', $studentTest->id) }}">View</a>
                                    @endif
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
