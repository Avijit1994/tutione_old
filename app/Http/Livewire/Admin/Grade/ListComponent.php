<?php

namespace App\Http\Livewire\Admin\Grade;

use App\Models\Curriculam;
use App\Models\Grade;
use Livewire\Component;
use Livewire\WithPagination;

class ListComponent extends Component
{
    use WithPagination;

    public $items_per_page;
    public $filter = [
        "active_status" => "",
        "search" => "",
        "curriculum" => "",
        "grade" => "",
        "order_field" => "",
        "order_type" => "",
    ];


    protected $paginationTheme = 'bootstrap';
    protected $updatesQueryString = ['page'];

    public $search;

    public $sortField = 'name';
    public $sortDirection = 'asc';

    public function sortBy($field)
    {
        $this->sortField = $field;
    }

    public function render()
    {
        $data['curriculams'] = Curriculam::pluck('name', 'id');

        $data['grades'] = Grade::with('curriculam')
            ->when($this->filter["curriculum"], function ($query) {
                return $query->where('curriculam_id', $this->filter['curriculum']);
            })->orderBy($this->sortField, $this->sortDirection)->paginate($this->items_per_page);

        return view('livewire.admin.grade.list-component', $data);
    }
}
