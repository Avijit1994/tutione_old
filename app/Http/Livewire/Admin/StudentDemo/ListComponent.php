<?php

namespace App\Http\Livewire\Admin\StudentDemo;

use App\Models\Curriculam;
use App\Models\Grade;
use App\Models\Student;
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

        $data['studentDemos'] = Student::with('studentDetail.curriculam','studentDetail.grade')->where('register_type', 'book-demo')
            ->when($this->filter["name"], function ($query) {
                return $query->where('name', 'LIKE', $this->filter['name'] . '%');
            })
            ->when($this->filter["curriculum"], function ($query) {
                return $query->whereHas('studentDetail', function ($q) {
                    $q->where('curriculam_id', $this->filter['curriculum']);
                });
            })
            ->when($this->filter["grade"], function ($query) {
                return $query->whereHas('studentDetail', function ($q) {
                    $q->where('grade_id', $this->filter['grade']);
                });
            })->latest()->paginate();

        $data['status'] = array(1 => 'Use', 2 => 'Unused');

        return view('livewire.admin.student-demo.list-component', $data);
    }
}
