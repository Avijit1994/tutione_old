<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Filter</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Search By Curriculum</label>
                            {{ Form::select('curriculum', $curriculams, old('curriculum'), ['wire:model' => 'filter.curriculum','class' => 'form-control','placeholder' => 'Pick a curriculum']) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">List of all Grades</h3>
            <div class="card-tools float-right form-inline">
                <input type="text" name="search" class="form-control" placeholder="search">
                <a href="{{ route('admin.grade.create') }}" class="btn btn-primary">Add Grade</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <x-table>
                    <x-slot name="head">
                        <x-table.heading>Image</x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('name', {{ $sortDirection == 'asc'? 'desc':'asc' }})">Curriculum</x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('name', {{ $sortDirection == 'asc'? 'desc':'asc' }})">Name</x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('name', {{ $sortDirection == 'asc'? 'desc':'asc' }})">Slug</x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('name', {{ $sortDirection == 'asc'? 'desc':'asc' }})">Status</x-table.heading>
                    </x-slot>
                    <x-slot name="body">
                        @if(!empty($grades))
                        @foreach ($grades as $grade)
                            <x-table.row onclick="window.location='{{ route('admin.grade.edit',$grade->id) }}'">
                                <x-table.cell><img src="{{ asset('s3/30/30/'.$grade->image) }}" alt=""></x-table.cell>
                                <x-table.cell>{{ $grade->curriculam->name }}</x-table.cell>
                                <x-table.cell>{{ $grade->name }}</x-table.cell>
                                <x-table.cell>{{ $grade->slug }}</x-table.cell>
                                <x-table.cell>
                                    <livewire:components.toggle-button :model="$grade" :key="$grade->id"/>
                                </x-table.cell>
                            </x-table.row>
                        @endforeach
                    @else
                        <x-table.row>
                            <x-table.cell colspan="100%">No Data Found.</x-table.cell>
                        </x-table.row>
                    @endif
                    </x-slot>
                </x-table>
            </div>
            {{ $grades->links('vendor/livewire/custom-bootstrap') }}
        </div>
    </div>
</div>
