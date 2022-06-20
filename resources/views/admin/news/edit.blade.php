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
                <a href="{{ route('admin.news.index') }}" class="btn btn-sm btn-primary">Back</a>
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
                </div><br/>
            @endif
            {{ Form::model($news,['route' => ['admin.news.update',$news->id], 'files' => true,'method' => 'PUT']) }}
            <div class="mb-1 row">
                {{ Form::label('category', 'Category', ['class' => 'col-sm-3 col-form-label']) }}
                <div class="col-sm-7">
                    {{ Form::select('category', ['press-release'=>'Press Release', 'tutione-news'=>'TheTuitionE in News', 'media'=>'Media'], old('category'), ['class' => 'form-control','placeholder' => 'Pick a Category']) }}
                    @error('category') <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-1 row">
                {{ Form::label('title', 'Title', ['class' => 'col-sm-3 col-form-label']) }}
                <div class="col-sm-7">
                    {{ Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => 'Title']) }}
                    @error('title') <span class="text-red">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mb-1 row">
                {{ Form::label('description', 'Description', ['class' => 'col-sm-3 col-form-label']) }}
                <div class="col-sm-7">
                    {{ Form::textarea('description', old('description'), ['class' => 'form-control','rows' => '3','placeholder' => 'Description']) }}
                    @error('description') <span class="text-red">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mb-1 row">
                {{ Form::label('image', 'Small Image', ['class' => 'col-sm-3 col-form-label']) }}
                <div class="col-sm-7">
                    <img id="preview-image-before-upload"
                         src="{{ $news->image? asset('s3/100/100/'.$news->image) : 'https://via.placeholder.com/100' }}"
                         class="img-thumbnail" alt="preview image" style="height: 100px;width: 100px;">
                    {{ Form::file('image', ['class' => 'form-control', 'accept' => 'image/*']) }}
                    @error('image') <span class="text-red">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mb-1 row">
                {{ Form::label('large_image', 'Large Image', ['class' => 'col-sm-3 col-form-label']) }}
                <div class="col-sm-7">
                    <img id="preview-image-before-upload"
                         src="{{ $news->large_image? asset('s3/100/100/'.$news->large_image) : 'https://via.placeholder.com/100' }}"
                         class="img-thumbnail" alt="preview image" style="height: 100px;width: 100px;">
                    {{ Form::file('large_image', ['class' => 'form-control', 'accept' => 'image/*']) }}
                    @error('large_image') <span class="text-red">{{ $message }}</span> @enderror
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
