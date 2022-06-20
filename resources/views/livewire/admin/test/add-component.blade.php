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
    <form wire:submit.prevent="save">
        <div class="mb-1 row">
            {{ Form::label('curriculam_id', 'Curriculam', ['class' => 'col-sm-3 col-form-label']) }}
            <div class="col-sm-7">
                {{ Form::select('curriculam_id', $curriculams, old('curriculam_id'), ['wire:model' => 'curriculam_id','class' => 'form-control','placeholder' => 'Pick a curriculam']) }}
                @error('curriculam_id') <span class="text-red">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-1 row">
            {{ Form::label('grade_id', 'Grade', ['class' => 'col-sm-3 col-form-label']) }}
            <div class="col-sm-7">
                {{ Form::select('grade_id', $grades, old('grade_id'), ['wire:model' => 'grade_id','class' => 'form-control','placeholder' => 'Pick a Grade']) }}
                @error('grade_id') <span class="text-red">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-1 row">
            {{ Form::label('subject_id', 'Subject', ['class' => 'col-sm-3 col-form-label']) }}
            <div class="col-sm-7">
                {{ Form::select('subject_id', $subjects, old('subject_id'), ['wire:model' => 'subject_id','class' => 'form-control','placeholder' => 'Pick a Subject']) }}
                @error('subject_id') <span class="text-red">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-1 row">
            {{ Form::label('name', 'Name', ['class' => 'col-sm-3 col-form-label']) }}
            <div class="col-sm-7">
                {{ Form::text('name', old('name'), ['wire:model' => 'name','class' => 'form-control', 'placeholder' => 'Name']) }}
                @error('name') <span class="text-red">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="mb-1 row">
            {{ Form::label('description', 'Description', ['class' => 'col-sm-3 col-form-label']) }}
            <div class="col-sm-7">
                <div wire:ignore>
                    {{ Form::textarea('description', old('description'), ['wire:model' => 'description', 'class' => 'form-control', 'placeholder' => 'Description']) }}
                </div>
                @error('description') <span class="text-red">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="mb-1 row">
            {{ Form::label('duration', 'Duration (in min.)', ['class' => 'col-sm-3 col-form-label']) }}
            <div class="col-sm-7">
                {{ Form::text('duration', old('duration'), ['wire:model' => 'duration', 'class' => 'form-control', 'placeholder' => 'Duration']) }}
                @error('duration') <span class="text-red">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="mb-1 row">
            {{ Form::label('file', 'File ( pdf )', ['class' => 'col-sm-3 col-form-label']) }}
            <div class="col-sm-7">
                {{ Form::file('file', ['wire:model' => 'file', 'class' => 'form-control', 'accept' => 'file/*']) }}
                @error('file') <span class="text-red">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="mb-1 row">
            {{ Form::label('question_type', 'Question Type', ['class' => 'col-sm-3 col-form-label']) }}
            <div class="col-sm-7">
                {{ Form::select('question_type',['mcq' => 'mcq','mcq-written' => 'mcq-written','written' => 'written'],old('question_type'),['wire:model' => 'question_type', 'class' => 'form-control', 'placeholder' => 'Pick a Type']) }}
                @error('question_type') <span class="text-red">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="mb-1 row">
            {{ Form::label('active_status', 'Status', ['class' => 'col-sm-3 col-form-label']) }}
            <div class="col-sm-7">
                {{ Form::select('active_status', ['Inactive', 'Active'], old('active_status'), ['wire:model' => 'active_status', 'class' => 'form-control','placeholder' => 'Pick a Status']) }}
                @error('active_status') <span class="text-red">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="mb-1 row">
            <div class="col-sm-7 offset-3">
                <button type="submit" class="btn btn-info">Submit</button>
                <a href="{{ route('admin.test.index') }}" class="btn btn-default">Cancel</a>
            </div>
        </div>
    </form>
</div>

<script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
<script>
    const editor = CKEDITOR.replace('description', {
        filebrowserUploadUrl: "{{ route( 'upload', ['_token'=> csrf_token() ] ) }}",
        filebrowserUploadMethod: 'form'
    });
    editor.on('change', function (event) {
        @this.
        set('description', event.editor.getData());
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

