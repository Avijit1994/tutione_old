<?php

namespace App\Http\Livewire\Admin\Curriculam;

use App\Models\Curriculum;
use Livewire\Component;

class ListComponent extends Component
{
    public $columnSearch = [
        'name' => null,
    ];

    public function boot()
    {
        $this->queryString['columnSearch'] = ['except' => null];
    }

    public function render()
    {
        $data['curriculums'] = Curriculum::latest()->paginate();

        return view('livewire.admin.curriculam.list-component', $data);
    }
}
