<x-admin-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">{{ $subTitle }}</h3>
                <div class="card-tools float-right">
                    <a href="{{ route('admin.teacher.create') }}" class="btn btn-primary">Add Teacher</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered text-nowrap">
                        <thead>
                        <tr>
                            <th class="text-center">Image</th>
                            <th class="text-center">First Name</th>
                            <th class="text-center">Last Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center" style="width: 10%">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if (!empty($teachers))
                            @foreach ($teachers as $teacher)
                                <tr onclick="window.location='{{ route('admin.teacher.edit', $teacher->id) }}'">
                                    <td>
                                        <img src="{{ empty($teacher->image) ? $teacher->getUrlfriendlyAvatar(30) : asset('s3/30/30/'.$teacher->image)}}">
                                    </td>
                                    <td>{{ $teacher->first_name }}</td>
                                    <td>{{ $teacher->last_name }}</td>
                                    <td>{{ $teacher->email }}</td>
                                    <td>{{ $teacher->phone }}</td>
                                    <td>
                                        <livewire:components.toggle-button :model="$teacher"
                                                                           :key="$teacher->id" />
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
                {{ $teachers->links() }}
            </div>
        </div>
    </div>
</x-admin-layout>
