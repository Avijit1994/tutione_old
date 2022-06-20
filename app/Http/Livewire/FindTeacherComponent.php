<?php

namespace App\Http\Livewire;

use App\Models\Curriculam;
use App\Models\Grade;
use App\Models\Subject;
use Illuminate\Http\Request;
use Livewire\Component;

class FindTeacherComponent extends Component
{
    public $curriculum;

    public $grade;

    public $subject;

    public function mount(Request $request)
    {
        $this->curriculum = $request->curriculum;
        $this->grade = $request->grade;
        $this->subject = $request->subject;
    }

    public function render()
    {
        $data['curriculums'] = Curriculam::get();

        $data['grades'] = Grade::whereHas('curriculam', function ($query) {
            $query->where('slug', $this->curriculum);
        })->get();

        $data['subjects'] = Subject::whereHas('grade' , function ($query) {
            $query->where('slug', $this->grade);
        })->get();

        return view('livewire.find-teacher-component', $data);
    }
}
