<?php

namespace App\Http\Livewire\Admin\Grade;

use App\Models\Curriculam;
use Livewire\Component;

class EditComponent extends Component
{

    public $grade;

    public function mount($grade)
    {
        $this->grade = $grade;
    }

    public function render()
    {
        $data['curriculams'] = Curriculam::pluck('name', 'id');

        return view('livewire.admin.grade.edit-component', $data);
    }
}
