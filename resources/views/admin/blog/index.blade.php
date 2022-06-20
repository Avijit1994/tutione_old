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
                <a href="{{ route('admin.blog.create') }}" class="btn btn-primary">Add blog</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered text-nowrap">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th style="width: 10%">Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(!empty($blogs))
                        @foreach ($blogs as $blog)
                            <tr>
                                <td><img src="{{ asset('s3/30/30/'.$blog->image) }}"></td>
                                <td>{{ optional($blog->category)->name }}</td>
                                <td>{{ $blog->name }}</td>
                                <td>{{ $blog->slug }}</td>
                                <td>
                                    <livewire:components.toggle-button :model="$blog" :key="$blog->id" />
                                </td>
                                <td class="text-end">
                                    <form action="{{ route('admin.blog.destroy',$blog->id) }}"
                                          method="POST">
                                        {{-- <a class="btn btn-sm btn-info"
                                           href="{{ route('admin.blog.show',$blog->id) }}"><i
                                                class="fas fa-eye"></i></a> --}}
                                        <a class="btn btn-sm btn-primary"
                                           href="{{ route('admin.blog.edit',$blog->id) }}">Edit</a>
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
            {{ $blogs->links() }}
        </div>
    </div>
</x-admin-layout>
