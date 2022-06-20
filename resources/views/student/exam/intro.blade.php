<x-student-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="card">
    <div class="card-header">Induction</div>
    <div class="card-body">
        {!! $test->description !!}
    </div>
    <div class="card-footer">
        {{ Form::open(['route' => 'student.student-test.store', 'files' => true]) }}
        {{ Form::hidden('test_id', $test->id) }}
        <button type="submit" class="btn btn-primary">Start</button>
        {{ Form::close() }}
    </div>
</div>

</x-student-layout>
