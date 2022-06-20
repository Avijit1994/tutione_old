<?php

namespace App\Http\Livewire\Admin\Test;

use App\Models\Curriculam;
use App\Models\Test;
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
        return Test::query();
    }

    public function render()
    {
        return view('livewire.admin.test.list-component');
    }
}
