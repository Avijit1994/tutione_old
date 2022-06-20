<x-admin-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">{{ $subTitle }}</h3>
{{--            <div class="card-tools float-right">--}}
{{--                <a href="{{ route('admin.contact.create') }}" class="btn btn-primary">Add contact</a>--}}
{{--            </div>--}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th style="width: 50px">Message</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(!empty($contacts))
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->message }}</td>
{{--                                <td>--}}
{{--                                    <livewire:components.toggle-button :model="$contact" :key="$contact->id" />--}}
{{--                                </td>--}}
                                <td class="text-end">
                                    <form action="{{ route('admin.contact.destroy',$contact->id) }}"
                                          method="POST">
                                        {{-- <a class="btn btn-sm btn-info"
                                           href="{{ route('admin.contact.show',$contact->id) }}"><i
                                                class="fas fa-eye"></i></a> --}}
{{--                                        <a class="btn btn-sm btn-primary"--}}
{{--                                           href="{{ route('admin.contact.edit',$contact->id) }}">Edit</a>--}}
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
            {{ $contacts->links() }}
        </div>
    </div>
</x-admin-layout>
