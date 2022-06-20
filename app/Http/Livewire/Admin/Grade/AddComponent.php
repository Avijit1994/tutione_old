<?php

namespace App\Http\Livewire\Admin\Grade;

use App\Models\Curriculam;
use Livewire\Component;

class AddComponent extends Component
{
    public function render()
    {
        $data['curriculams'] = Curriculam::pluck('name', 'id');

        return view('livewire.admin.grade.add-component',$data);
    }
}
