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
                <a href="{{ route('admin.story.index') }}" class="btn btn-sm btn-primary">Back</a>
            </div>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            {{ Form::model($story, ['route' => ['admin.story.update', $story->id], 'files' => true, 'method' => 'PUT']) }}
                <div class="mb-1 row">
                    {{ Form::label('video_link', 'Video Url', ['class' => 'col-sm-3 col-form-label']) }}
                    <div class="col-sm-7">
                        {{ Form::text('video_link', old('video_link'), ['class' => 'form-control', 'placeholder' => 'Video Url']) }}
                        @error('video_link') <span class="text-red">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mb-1 row">
                    {{ Form::label('image', 'Image', ['class' => 'col-sm-3 col-form-label']) }}
                    <div class="col-sm-7">
                        <img id="preview-image-before-upload" src="https://via.placeholder.com/100"
                             class="img-thumbnail" alt="preview image" style="height: 100px;width: 100px;">
                        {{ Form::file('image', ['class' => 'form-control', 'accept' => 'image/*']) }}
                        @error('image') <span class="text-red">{{ $message }}</span> @enderror
                    </div>
                </div>
            <div class="mb-1 row">
                {{ Form::label('active_status', 'Status', ['class' => 'col-sm-3 col-form-label']) }}
                <div class="col-sm-7">
                    {{ Form::select('active_status', ['Inactive', 'Active'], old('active_status'), ['class' => 'form-control','placeholder' => 'Pick a Status']) }}
                    @error('active_status') <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-1 row">
                <div class="col-sm-7 offset-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</x-admin-layout>
