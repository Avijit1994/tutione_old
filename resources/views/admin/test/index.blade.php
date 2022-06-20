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
                <a href="{{ route('admin.test.create') }}" class="btn btn-primary">Add test</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered text-nowrap">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Question Type</th>
                            <th>Curriculum</th>
                            <th>Grade</th>
                            <th>Subject</th>
                            <th>File</th>
                            <th style="width: 10%">Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($tests))
                            @foreach ($tests as $test)
                                <tr>
                                    <td>{{ $test->name }}</td>
                                    <td>{{ $test->question_type }}</td>
                                    <td>{{ $test->curriculam->name }}</td>
                                    <td>{{ $test->grade->name }}</td>
                                    <td>{{ $test->subject->name }}</td>
                                    <td><a href="{{ $test->file?Storage::disk('s3')->url($test->file):"" }}" target="_blank">{{ $test->file }}</a></td>
                                    <td>
                                        <livewire:components.toggle-button :model="$test" :key="$test->id" />
                                    </td>
                                    <td class="text-end">
                                        <form action="{{ route('admin.test.destroy', $test->id) }}" method="POST">
                                            <a class="btn btn-sm btn-info"
                                                href="{{ route('admin.test.test-question.index', $test->id) }}">Question</a>
                                            <a class="btn btn-sm btn-primary"
                                                href="{{ route('admin.test.edit', $test->id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                onclick="return confirm('Are you sure to delete this item?')"
                                                class="btn btn-sm btn-danger">Delete</button>
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
            {{ $tests->links() }}
        </div>
    </div>
</x-admin-layout>
