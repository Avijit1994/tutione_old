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
                        <h3 class="card-title">Categories View</h3>
                        <div class="card-tools float-right">
                            <a href="{{ route('admin.category.index') }}" class="btn btn-sm btn-primary">Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                <tr>
                                    <td>Name</td>
                                    <td>{{ $category->name }}</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>{!! $category->description !!} </td>
                                </tr>
                                {{-- <tr>
                                    <td>Image</td>
                                    <td><img src="{{ asset('storage/images/100/100/'.$category->image) }}"></td>
                                </tr> --}}
                                <tr>
                                    <td>Status</td>
                                    <td>
                                        <b-badge variant="{{ $category->active_status == 1 ?'success':'warning' }}">{{ $statusOptions[$category->active_status] }}</b-badge>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
