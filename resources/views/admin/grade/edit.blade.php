<x-admin-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Grade Edit</h3>
            <div class="card-tools float-right">
                <a href="{{ route('admin.grade.index') }}" class="btn btn-sm btn-primary">Back</a>
            </div>
        </div>
        <div class="card-body">
            <livewire:admin.grade.edit-component :grade="$grade" />
        </div>
    </div>
</x-admin-layout>
