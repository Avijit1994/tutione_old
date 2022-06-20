<x-admin-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Deleted Categories List</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm table-hover table-bordered text-nowrap">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Parent</th>
                                    <th class="text-right">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($categories))
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('storage/images/30/30/'.$category->image) }}">
                                            </td>
                                            <td>
                                                @if($category->parent)
                                                    {{$category->parent->name}} ->
                                                @endif
                                                {{ $category->name }}
                                            </td>
                                            <td>{{ optional($category->parent)->name }}</td>
                                            <td class="text-right">
                                                <form action="{{ route('admin.category.restore',$category->id) }}"
                                                      method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-restore"></i></button>
                                                </form>
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
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
