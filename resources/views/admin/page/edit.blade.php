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
                <a href="{{ route('admin.page.index') }}" class="btn btn-sm btn-primary">Back</a>
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
            {{ Form::model($page,['route' => ['admin.page.update',$page->id], 'files' => true,'method' => 'PUT']) }}
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
                <div class="col-sm-7 offset-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</x-admin-layout>
