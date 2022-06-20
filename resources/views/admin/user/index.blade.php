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
{{--                <a href="{{ route('admin.user.create') }}" class="btn btn-primary">Add curriculam</a>--}}
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered text-nowrap">
                    <thead>
                    <tr>
                        <th>Sl</th>
{{--                        <th>Image</th>--}}
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Department</th>
{{--                        <th style="width: 10%">Status</th>--}}
{{--                        <th>Action</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @if(!empty($users))
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->userDetail->phone }}</td>
                                <td>{{ $user->userDetail->department }}</td>
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
            {{ $users->links() }}
        </div>
    </div>
</x-admin-layout>
