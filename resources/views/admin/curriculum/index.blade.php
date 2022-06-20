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
                <a href="{{ route('admin.curriculum.create') }}" class="btn btn-primary">Add curriculum</a>
            </div>
        </div>
        <div class="card-body">
            <livewire:admin.curriculam.list-component />
        </div>
    </div>
</x-admin-layout>
