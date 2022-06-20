@if (auth()->user()->type == 'admin')
    <x-admin-layout>
@endif

@if (auth()->user()->type == 'student')
    <x-student-layout>
@endif
<x-slot name="header">
    <h2 class="h4 font-weight-bold">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

<div class="card my-4">
    <div class="card-body">
        You're logged in!
    </div>
</div>
@if (auth()->user()->type == 'admin')
    </x-admin-layout>
@endif

@if (auth()->user()->type == 'student')
    </x-student-layout>
@endif
