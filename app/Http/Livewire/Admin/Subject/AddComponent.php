<?php

namespace App\Http\Livewire\Admin\Subject;

use App\Models\Curriculam;
use App\Models\Grade;
use Livewire\Component;

class AddComponent extends Component
{
    public $curriculam;
    public $grade;

    public function render()
    {
        $data['curriculams'] = Curriculam::pluck('name', 'id');

        $data['grades'] = Grade::where('curriculam_id', $this->curriculam)->pluck('name', 'id');

        return view('livewire.admin.subject.add-component',$data);
    }
}
