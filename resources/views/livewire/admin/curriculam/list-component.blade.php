<div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered text-nowrap">
            <thead>
            <tr>
                <th>Sl</th>
                <th>Image</th>
                <th>Name</th>
                <th>Slug</th>
                <th style="width: 10%">Status</th>
            </tr>
            </thead>
            <tbody>
            @if(!empty($curriculums))
                @foreach ($curriculums as $curriculum)
                    <tr onclick="window.location='{{ route('admin.curriculum.edit',$curriculum->id) }}'">
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('s3/30/30/'.$curriculum->image) }}">
                        </td>
                        <td>{{ $curriculum->name }}</td>
                        <td>{{ $curriculum->slug }}</td>
                        <td>
                            <livewire:components.toggle-button :model="$curriculum" :key="$curriculum->id"/>
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
    {{ $curriculums->links('vendor/livewire/custom-bootstrap') }}
</div>
