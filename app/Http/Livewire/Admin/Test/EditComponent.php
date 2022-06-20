<?php

namespace App\Http\Livewire\Admin\Test;

use App\Models\Curriculam;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Test;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditComponent extends Component
{
    use WithFileUploads;

    public $curriculam_id;
    public $grade_id;
    public $subject_id;

    public $name;
    public $description;
    public $duration;
    public $question_type;
    public $active_status;
    public $file;


    public $test;

    public function mount($test)
    {
        $this->test = $test;
        $this->curriculam_id = $test->curriculam_id;
        $this->grade_id = $test->grade_id;
        $this->subject_id = $test->subject_id;
        $this->file = $test->file;
        $this->name = $test->name;
        $this->description = $test->description;
        $this->duration = $test->duration;
        $this->question_type = $test->question_type;
        $this->active_status = $test->active_status;
    }

    public function save()
    {
//        dd('j');
//        $this->validate([
//            'question_type' => 'required',
//            'name' => 'required',
//        ]);

//        $filename = $this->file->store('photos', 's3');

        $testQuestion = $this->test->update([
            'curriculam_id' => $this->curriculam_id,
            'grade_id' => $this->grade_id,
            'subject_id' => $this->subject_id,
//            'file' => $filename,
            'name' => $this->name,
            'description' => $this->description,
            'duration' => $this->duration,
            'question_type' => $this->question_type,
            'active_status' => $this->active_status,
        ]);

        return redirect(route('admin.test.test-question.index', $this->test->id));
    }

    public function render()
    {
        $data['curriculams'] = Curriculam::pluck('name', 'id');

        $data['grades'] = Grade::where('curriculam_id', $this->curriculam_id)->pluck('name', 'id');

        $data['subjects'] = Subject::where('grade_id', $this->grade_id)->pluck('name', 'id');

        return view('livewire.admin.test.edit-component',$data);
    }
}
