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
                <a href="{{ route('admin.student-test.index') }}" class="btn btn-sm btn-primary">Back</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm table-hover table-bordered text-nowrap">
                    <thead>
                        <tr>
                            <th class="text-center">Question</th>
                            <th class="text-center">Option Type</th>
                            <th class="text-center">Question Type</th>
                            <th class="text-center">answer</th>
                            <th class="text-center">given_time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($studentTest->studentTestDetails as $studentTestDetail)
                            <tr>
                                <td>{!! $studentTestDetail->testQuestion->name !!}</td>
                                <td>{{ $studentTestDetail->testQuestion->option_type }}</td>
                                <td>{{ $studentTestDetail->testQuestion->question_type }}</td>
                                <td>{{ $studentTestDetail->answer }}</td>
                                <td>{{ $studentTestDetail->given_time }}</td>
                                {{-- <td>
                                    <livewire:components.toggle-button :model="$studentTest"
                                        :key="$studentTest->id" />
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
