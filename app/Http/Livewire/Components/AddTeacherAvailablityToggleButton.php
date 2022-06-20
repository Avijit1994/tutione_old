<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class AddTeacherAvailablityToggleButton extends Component
{
    public $day;

    public $isActive;

    public $start_time;

    public $end_time;

    public $field = 'active_status';

    public function mount($day)
    {
        $this->day = $this->day;
    }

    public function updating($field, $value)
    {
        $this->field = $value;
    }

    public function render()
    {
        return view('livewire.components.add-teacher-availablity-toggle-button');
    }
}
