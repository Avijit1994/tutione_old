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
                <a href="{{ route('admin.banner.create') }}" class="btn btn-primary">Add Banner</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered text-nowrap">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th style="width: 10%">Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(!empty($banners))
                        @foreach ($banners as $banner)
                            <tr>
                                <td><img src="{{ asset('s3/30/30/'.$banner->image) }}"></td>
                                <td>{{ $banner->name }}</td>
                                <td>{{ $banner->slug }}</td>
                                <td>
                                    <livewire:components.toggle-button :model="$banner" :key="$banner->id" />
                                </td>
                                <td class="text-end">
                                    <form action="{{ route('admin.banner.destroy',$banner->id) }}"
                                          method="POST">
                                        <a class="btn btn-sm btn-primary"
                                           href="{{ route('admin.banner.edit',$banner->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure to delete this item?')" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
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
            {{ $banners->links() }}
        </div>
    </div>
</x-admin-layout>
