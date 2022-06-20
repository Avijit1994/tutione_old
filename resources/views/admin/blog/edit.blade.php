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
                <a href="{{ route('admin.blog.index') }}" class="btn btn-sm btn-primary">Back</a>
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
            {{ Form::model($blog,['route' => ['admin.blog.update',$blog->id], 'files' => true,'method' => 'PUT']) }}
            <div class="mb-1 row">
                {{ Form::label('category_id', 'Category', ['class' => 'col-sm-3 col-form-label']) }}
                <div class="col-sm-7">
                    {{ Form::select('category_id',  $categories, old('category_id'), ['class' => 'form-control','placeholder' => 'Pick a Category']) }}
                    @error('category_id') <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-1 row">
                {{ Form::label('name', 'Title', ['class' => 'col-sm-3 col-form-label']) }}
                <div class="col-sm-7">
                    {{ Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Title']) }}
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
                {{ Form::label('tag', 'Tag', ['class' => 'col-sm-3 col-form-label']) }}
                <div class="col-sm-7">
                    {{ Form::text('tag', old('tag'), ['class' => 'form-control', 'placeholder' => 'Tag']) }}
                    @error('tag') <span class="text-red">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mb-1 row">
                {{ Form::label('description', 'Description', ['class' => 'col-sm-3 col-form-label']) }}
                <div class="col-sm-7">
                    {{ Form::textarea('description', old('description'), ['class' => 'form-control','rows' => '3','placeholder' => 'Description','id' => 'description']) }}
                    @error('description') <span class="text-red">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mb-1 row">
                {{ Form::label('image', 'Image', ['class' => 'col-sm-3 col-form-label']) }}
                <div class="col-sm-7">
                    <img id="preview-image-before-upload"
                         src="{{ $blog->image ? asset('s3/100/100/'.$blog->image):"https://via.placeholder.com/100" }}"
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
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            {{--.then(editor => {--}}
            {{--    editor.model.document.on('change:data', () => {--}}
            {{--        @this.set('description', editor.getData());--}}
            {{--    })--}}
            {{--})--}}
            .catch(error => {
                console.error(error);
            });
    </script>
</x-admin-layout>
