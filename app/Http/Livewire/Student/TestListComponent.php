<?php

namespace App\Http\Livewire\Student;

use App\Models\Curriculam;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Test;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TestListComponent extends Component
{

    public $subject_id;

    public function render()
    {
        $data['subjects'] = Subject::whereCurriculamId(optional(Auth::user()->studentDetail)->curriculam_id)->whereGradeId(optional(Auth::user()->studentDetail)->grade_id)->pluck('name', 'id');

        $data['tests'] = Test::whereSubjectId($this->subject_id)->paginate();

        return view('livewire.student.test-list-component', $data);
    }
}
