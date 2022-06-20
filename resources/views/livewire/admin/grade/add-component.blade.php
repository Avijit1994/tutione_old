<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br/>
    @endif
    {{ Form::open(['route' => 'admin.grade.store', 'files' => true]) }}
    <div class="mb-1 row">
        {{ Form::label('curriculam_id', 'Curriculam', ['class' => 'col-sm-3 col-form-label']) }}
        <div class="col-sm-7">
            {{ Form::select('curriculam_id', $curriculams, old('curriculam_id'), ['class' => 'form-control','placeholder' => 'Pick a curriculam']) }}
            @error('curriculam_id') <span class="text-red">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-1 row">
        {{ Form::label('name', 'Name', ['class' => 'col-sm-3 col-form-label']) }}
        <div class="col-sm-7">
            {{ Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Name']) }}
            @error('name') <span class="text-red">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="mb-1 row">
        {{ Form::label('slug', 'Slug', ['class' => 'col-sm-3 col-form-label']) }}
        <div class="col-sm-7">
            {{ Form::text('slug', old('slug'), ['class' => 'form-control', 'placeholder' => 'Slug']) }}
            @error('slug') <span class="text-red">{{ $message }}</span> @enderror
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
        {{ Form::label('image', 'Image', ['class' => 'col-sm-3 col-form-label']) }}
        <div class="col-sm-7">
            <img id="preview-image-before-upload" src="https://via.placeholder.com/100"
                 class="img-thumbnail" alt="preview image" style="height: 100px;width: 100px;">
            {{ Form::file('image', ['class' => 'form-control', 'accept' => 'image/*']) }}
            @error('image') <span class="text-red">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="mb-1 row">
        {{ Form::label('metaTitle', 'metaTitle', ['class' => 'col-sm-3 col-form-label']) }}
        <div class="col-sm-7">
            {{ Form::textarea('metaTitle', old('metaTitle'), ['class' => 'form-control','rows' => '3','placeholder' => 'metaTitle']) }}
            @error('metaTitle') <span class="text-red">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="mb-1 row">
        {{ Form::label('metaDescription', 'metaDescription', ['class' => 'col-sm-3 col-form-label']) }}
        <div class="col-sm-7">
            {{ Form::textarea('metaDescription', old('metaDescription'), ['class' => 'form-control','rows' => '3','placeholder' => 'metaDescription']) }}
            @error('metaDescription') <span class="text-red">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="mb-1 row">
        {{ Form::label('metaKeyword', 'metaKeyword', ['class' => 'col-sm-3 col-form-label']) }}
        <div class="col-sm-7">
            {{ Form::textarea('metaKeyword', old('metaKeyword'), ['class' => 'form-control','rows' => '3','placeholder' => 'metaKeyword']) }}
            @error('metaKeyword') <span class="text-red">{{ $message }}</span> @enderror
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
