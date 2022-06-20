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
                <a href="{{ route('admin.test.index') }}" class="btn btn-primary">Back</a>
                <a href="{{ route('admin.test.test-question.create', request()->test) }}"
                    class="btn btn-primary">Add Question</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered text-nowrap">
                    <thead>
                        <tr>
                            <th class="text-center">Name</th>
                            <th class="text-center">Question Type</th>
                            <th class="text-center">Option Type</th>
                            <th class="text-center w-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($testQuestions))
                            @foreach ($testQuestions as $testQuestion)
                                <tr>
                                    <td>{!! $testQuestion->name !!}</td>
                                    <td>{{ $testQuestion->question_type }}</td>
                                    <td>{{ $testQuestion->option_type }}</td>
                                    <td class="text-end">
                                        <form
                                            action="{{ route('admin.test.test-question.destroy', [$test->id, $testQuestion->id]) }}"
                                            method="POST">
                                            <a class="btn btn-sm btn-primary"
                                                href="{{ route('admin.test.test-question.edit', [$test->id, $testQuestion->id]) }}">Edit</a>
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
            {{ $testQuestions->links() }}
        </div>
    </div>
</x-admin-layout>
