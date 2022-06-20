<?php

namespace App\Http\Livewire\Admin\Subject;

use App\Models\Curriculam;
use App\Models\Grade;
use App\Models\Subject;
use Livewire\Component;
use Livewire\WithPagination;

class ListComponent extends Component
{
    use WithPagination;

    public $items_per_page;
    public $filter = [
        "active_status" => "",
        "name" => "",
        "curriculum" => "",
        "grade" => "",
        "order_field" => "",
        "order_type" => "",
    ];


    protected $paginationTheme = 'bootstrap';
    protected $updatesQueryString = ['page'];

    public function render()
    {

        $data['curriculams'] = Curriculam::pluck('name', 'id');

        $data['grades'] = Grade::where('curriculam_id', $this->filter['curriculum'])->pluck('name', 'id');

        $subjects = Subject::with(['grade.curriculam', 'grade'])
            ->when($this->filter["name"], function ($query) {
                return $query->where('name', 'LIKE', '%' . $this->filter['name'] . '%');
            })
            ->when($this->filter["curriculum"], function ($query) {
                return $query->where('curriculam_id', $this->filter['curriculum']);
            })
            ->when($this->filter["grade"], function ($query) {
                return $query->where('grade_id', $this->filter['grade']);
            });

        // Paginating
        $data['subjects'] = $subjects->latest()->paginate($this->items_per_page);

        $data['pagTitle'] = 'Subject';
        $data['subTitle'] = 'List of all subjects';

        return view('livewire.admin.subject.list-component', $data);
    }
}
