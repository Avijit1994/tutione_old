<?php

namespace App\Http\Livewire\Components;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class ToggleButton extends Component
{
    public Model $model;

    public $field = 'active_status';

    public $isActive;

    public function mount()
    {
        $this->isActive = $this->model->getAttribute($this->field);
    }

    public function updating($field, $value)
    {
        $this->model->setAttribute($this->field, $value)->save();
    }

    public function render()
    {
        return view('livewire.components.toggle-button');
    }
}
