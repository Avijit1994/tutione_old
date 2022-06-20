<?php

namespace App\Http\Livewire\Admin\Test;

use App\Models\Curriculam;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Test;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddComponent extends Component
{
    use WithFileUploads;

    public $curriculam_id;
    public $grade_id;
    public $subject_id;

    public $file;
    public $name;
    public $description;
    public $duration;
    public $question_type;
    public $active_status;

    public function save()
    {
        $this->validate([
            'question_type' => 'required',
            'name' => 'required',
        ]);

         $filename = $this->file->store('photos', 's3');

        $test = Test::create([
            'curriculam_id' => $this->curriculam_id,
            'grade_id' => $this->grade_id,
            'subject_id' => $this->subject_id,
            'file' => $filename,
            'name' => $this->name,
            'description' => $this->description,
            'duration' => $this->duration,
            'question_type' => $this->question_type,
            'active_status' => $this->active_status,
        ]);

        return redirect(route('admin.test.test-question.index', $test->id));
    }

    public function render()
    {
        $data['curriculams'] = Curriculam::get();

        $data['grades'] = Grade::where('curriculam_id', $this->curriculam_id)->pluck('name', 'id');

        $data['subjects'] = Subject::where('grade_id', $this->grade_id)->pluck('name', 'id');

        return view('livewire.admin.test.add-component', $data);
    }
}
