<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;

class ExamResultComponent extends Component
{
    public $studentTest;
    public $student_test_id;

    public $ten_aed;

    public $twenty_five_aed;

    public function mount($studentTest)
    {
        $this->studentTest = $studentTest;
        $this->student_test_id = $studentTest->id;
    }

    public function save_ten_aed()
    {
        $studentTest = $this->studentTest->update([
            'review_type' => '10 AED',
        ]);

        $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Successfully Send for review']);
    }

    public function save_twenty_five_aed()
    {
        $studentTest = $this->studentTest->update([
            'review_type' => '25 AED',
        ]);

        $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Successfully Send for review']);
    }

    public function render()
    {
        return view('livewire.student.exam-result-component');
    }
}
