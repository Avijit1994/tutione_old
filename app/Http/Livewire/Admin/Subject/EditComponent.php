<?php

namespace App\Http\Livewire\Admin\Subject;

use App\Models\Curriculam;
use App\Models\Grade;
use Livewire\Component;

class EditComponent extends Component
{
    public $curriculam;
    public $grade;

    public function mount($subject)
    {
        $this->subject = $subject;
        $this->curriculam = $subject->curriculam_id;
        $this->grade = $subject->grade_id;
    }

    public function render()
    {
        $data['curriculams'] = Curriculam::pluck('name', 'id');

        $data['grades'] = Grade::where('curriculam_id', $this->curriculam)->pluck('name', 'id');

        return view('livewire.admin.subject.edit-component', $data);
    }
}
