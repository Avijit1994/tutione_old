<?php

namespace App\Http\Livewire\Admin\TeacherNewJoin;

use App\Models\Curriculam;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Teacher;
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
        "subject" => "",
        "order_field" => "",
        "order_type" => "",
    ];


    protected $paginationTheme = 'bootstrap';
    protected $updatesQueryString = ['page'];

    public function render()
    {

        $data['curriculams'] = Curriculam::pluck('name', 'id');

        $data['grades'] = Grade::where('curriculam_id', $this->filter['curriculum'])->pluck('name', 'id');

        $data['subjects'] = Subject::where('curriculam_id', $this->filter['curriculum'])->where('grade_id', $this->filter['grade'])->pluck('name', 'id');

        $data['teachers'] = Teacher::with('teacherSkill.curriculam','teacherSkill.grade')->whereActiveStatus(0)
            ->when($this->filter["name"], function ($query) {
                return $query->where('first_name', 'LIKE', $this->filter['name'] . '%');
            })
            ->when($this->filter["curriculum"], function ($query) {
                return $query->whereHas('teacherSkill', function ($q) {
                    $q->where('curriculam_id', $this->filter['curriculum']);
                });
            })
            ->when($this->filter["grade"], function ($query) {
                return $query->whereHas('teacherSkill', function ($q) {
                    $q->where('grade_id', $this->filter['grade']);
                });
            })
            ->when($this->filter["subject"], function ($query) {
                return $query->whereHas('teacherSkill', function ($q) {
                    $q->where('subject_id', $this->filter['subject']);
                });
            })->latest()->paginate();

        return view('livewire.admin.teacher-new-join.list-component', $data);
    }
}
