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
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(!empty($pages))
                        @foreach ($pages as $pages)
                            <tr>
                                <td>{{ $pages->slug }}</td>
                                <td class="text-end">
                                    <a class="btn btn-sm btn-info"
                                       href="{{ route('admin.page.edit',$pages->id) }}">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="100%">No Data Found.</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
