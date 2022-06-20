<?php

namespace App\Http\Livewire\Admin\Teacher;

use App\Models\Curriculam;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ListComponent extends DataTableComponent
{
    public function columns(): array
    {
        return [
            Column::make('Name')
                ->sortable()
                ->searchable(),
            Column::make('E-mail', 'email')
                ->sortable()
                ->searchable(),
            Column::make('Verified', 'email_verified_at')
                ->sortable(),
        ];
    }

    public function query(): Builder
    {
        return Teacher::query();
    }

    public function render()
    {
        $data['status'] = array(1 => 'Use', 2 => 'Unused');

        $data['teachers'] = Teacher::latest()->paginate();

        return view('livewire.admin.teacher.list-component', $data);
    }
}
