<div>
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif --}}
    <form wire:submit.prevent="save">
        <div class="mb-1 row">
            {{ Form::label('question_type', 'Question Type', ['class' => 'col-sm-3 col-form-label']) }}
            <div class="col-sm-7">
                {{ Form::select('question_type', $question_types, old('question_type'), ['wire:model.lazy' => 'question_type','class' => 'form-control','placeholder' => 'Pick a Question Type']) }}
                @error('question_type') <span class="text-red">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="mb-1 row">
            {{ Form::label('name', 'Question', ['class' => 'col-sm-3 col-form-label']) }}
            <div class="col-sm-7">
                <div wire:ignore>
                    {{ Form::textarea('name', old('name', $name), ['wire:model.lazy' => 'name','class' => 'form-control editor','placeholder' => 'Wright a Question']) }}
                </div>
                @error('name') <span class="text-red">{{ $message }}</span> @enderror
            </div>
        </div>
        @if ($question_type == 'mcq')
            <div class="mb-1 row">
                {{ Form::label('option_type', 'Option Type', ['class' => 'col-sm-3 col-form-label']) }}
                <div class="col-sm-7">
                    {{ Form::select('option_type', ['text' => 'Text', 'image' => 'Image'], old('option_type'), ['wire:model.lazy' => 'option_type','class' => 'form-control','placeholder' => 'Pick a Option Type']) }}
                    @error('option_type') <span class="text-red">{{ $message }}</span> @enderror
                </div>
            </div>
            @if ($option_type == 'image')
                <div class="mb-1 row">
                    {{ Form::label('option[1]', 'Option 1', ['class' => 'col-sm-3 col-form-label']) }}
                    <div class="col-sm-7">
                        {{ Form::file('option[1]', ['wire:model.lazy' => 'option_image.option_1','class' => 'form-control','placeholder' => 'Pick a Type']) }}
                        @error('option[1]') <span class="text-red">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mb-1 row">
                    {{ Form::label('option[2]', 'Option 2', ['class' => 'col-sm-3 col-form-label']) }}
                    <div class="col-sm-7">
                        {{ Form::file('option[2]', ['wire:model.lazy' => 'option_image.option_2','class' => 'form-control','placeholder' => 'Pick a Type']) }}
                        @error('option[2]') <span class="text-red">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mb-1 row">
                    {{ Form::label('option[3]', 'Option 3', ['class' => 'col-sm-3 col-form-label']) }}
                    <div class="col-sm-7">
                        {{ Form::file('option[3]', ['wire:model.lazy' => 'option_image.option_3','class' => 'form-control','placeholder' => 'Pick a Type']) }}
                        @error('option[3]') <span class="text-red">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mb-1 row">
                    {{ Form::label('option[4]', 'Option 4', ['class' => 'col-sm-3 col-form-label']) }}
                    <div class="col-sm-7">
                        {{ Form::file('option[4]', ['wire:model.lazy' => 'option_image.option_4','class' => 'form-control','placeholder' => 'Pick a Type']) }}
                        @error('option[4]') <span class="text-red">{{ $message }}</span> @enderror
                    </div>
                </div>
            @endif
            @if ($option_type == 'text')
                <div class="mb-1 row">
                    {{ Form::label('option[1]', 'Option 1', ['class' => 'col-sm-3 col-form-label']) }}
                    <div class="col-sm-7">
                        {{ Form::text('option[1]', old('qusetion_type'), ['wire:model.lazy' => 'option.option_1','class' => 'form-control','placeholder' => 'Pick a Type']) }}
                        @error('option.option_1') <span class="text-red">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mb-1 row">
                    {{ Form::label('option[2]', 'Option 2', ['class' => 'col-sm-3 col-form-label']) }}
                    <div class="col-sm-7">
                        {{ Form::text('option[2]', old('qusetion_type'), ['wire:model.lazy' => 'option.option_2','class' => 'form-control','placeholder' => 'Pick a Type']) }}
                        @error('option.option_2') <span class="text-red">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mb-1 row">
                    {{ Form::label('option[3]', 'Option 3', ['class' => 'col-sm-3 col-form-label']) }}
                    <div class="col-sm-7">
                        {{ Form::text('option[3]', old('qusetion_type'), ['wire:model.lazy' => 'option.option_3','class' => 'form-control','placeholder' => 'Pick a Type']) }}
                        @error('option.option_3') <span class="text-red">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mb-1 row">
                    {{ Form::label('option[4]', 'Option 4', ['class' => 'col-sm-3 col-form-label']) }}
                    <div class="col-sm-7">
                        {{ Form::text('option[4]', old('qusetion_type'), ['wire:model.lazy' => 'option.option_4','class' => 'form-control','placeholder' => 'Pick a Type']) }}
                        @error('option.option_4') <span class="text-red">{{ $message }}</span> @enderror
                    </div>
                </div>
            @endif
            <div class="mb-1 row">
                {{ Form::label('answer', 'Answer', ['class' => 'col-sm-3 col-form-label']) }}
                <div class="col-sm-7">
                    {{ Form::select('answer',['option_1' => 'Option 1', 'option_2' => 'Option 2', 'option_3' => 'Option 3', 'option_4' => 'Option 4'],old('answer'),['wire:model.lazy' => 'answer', 'class' => 'form-control', 'placeholder' => 'Pick a Answer']) }}
                    @error('answer') <span class="text-red">{{ $message }}</span> @enderror
                </div>
            </div>
        @endif
        <div class="mb-1 row">
            <div class="col-sm-7 offset-3">
                <button type="submit" class="btn btn-info">Submit</button>
                {{-- <a class="btn btn-info" href="{{ route('admin.test.test-question.create', $test->id) }}">Next</a> --}}
            </div>
        </div>
    </form>
</div>


<script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
<script>
    const editor = CKEDITOR.replace('name', {
        filebrowserUploadUrl: "{{ route( 'upload', ['_token'=> csrf_token() ] ) }}",
        filebrowserUploadMethod: 'form'
    });
    editor.on('change', function (event) {
        @this.
        set('name', event.editor.getData());
    })

    CKEDITOR.config.allowedContent = true;
    CKEDITOR.filebrowserUploadMethod = 'form';
    CKEDITOR.editorConfig = function (config) {
        config.extraPlugins = 'colorbutton,colordialog,panelbutton';
    };

    CKEDITOR.on('dialogDefinition', function (ev) {
        var dialogName = ev.data.name;
        var dialogDefinition = ev.data.definition;

        if (dialogName == 'image') {
            var infoTab2 = dialogDefinition.getContents('advanced');
            dialogDefinition.removeContents('advanced');
            var infoTab = dialogDefinition.getContents('info');
            infoTab.remove('txtBorder');
            infoTab.remove('cmbAlign');
            infoTab.remove('txtWidth');
            infoTab.remove('txtHeight');
            infoTab.remove('txtCellSpace');
            infoTab.remove('txtCellPad');
            infoTab.remove('txtCaption');
            infoTab.remove('txtSummary');
        }
    });

</script>
