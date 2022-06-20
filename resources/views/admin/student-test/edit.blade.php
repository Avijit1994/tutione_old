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
                        <h3 class="card-title">Brand Edit</h3>
                        <div class="card-tools float-right">
                            <a href="{{ route('admin.brand.index') }}" class="btn btn-sm btn-primary">Back</a>
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
                        {{ Form::model($brand, ['route' => ['admin.brand.update', $brand->id], 'files' => true, 'method' => 'PUT']) }}
                        <div class="form-group row">
                            {{ Form::label('name', 'Name', ['class' => 'col-sm-3 col-form-label']) }}
                            <div class="col-sm-7">
                                {{ Form::text('name', old('title'), ['class' => 'form-control', 'placeholder' => 'Name']) }}
                                @error('name') <span class="text-red">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            {{ Form::label('file', 'Image', ['class' => 'col-sm-3 col-form-label']) }}
                            <div class="col-sm-7">
                                <img id="preview-image-before-upload"
                                    src="{{ asset('s3/100/100/' . $brand->image) }}" alt="preview image"
                                    style="max-height: 250px;">
                                {{ Form::file('image', ['class' => 'form-control']) }}
                                @error('image') <span class="text-red">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            {{ Form::label('active_status', 'Status', ['class' => 'col-sm-3 col-form-label']) }}
                            <div class="col-sm-7">
                                {{ Form::select('active_status', $statusOptions, old('active_status'), ['class' => 'form-control', 'placeholder' => 'Pick a Status']) }}
                                @error('active_status') <span class="text-red">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-7 offset-3">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="{{ route('admin.brand.index') }}" class="btn btn-primary">Cancel</a>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
