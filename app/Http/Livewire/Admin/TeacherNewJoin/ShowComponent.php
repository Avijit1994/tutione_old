<?php

namespace App\Http\Livewire\Admin\TeacherNewJoin;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\TeacherActivity;
use App\Models\TeacherNote;
use App\Models\TeacherTask;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;

class ShowComponent extends Component
{
    use WithFileUploads;

    public $status;
    public $note_status;
    public $task_assign;
    public $teacher;
    public $note;
    public $activity_status;
    public $activity_date;
    public $activity;
    public $task;

    public function mount(Teacher $teacher)
    {
        $teacher->load('teacherSkill.curriculam','teacherSkill.grade','teacherSkill.subject');
        $this->teacher = $teacher;
        $this->status = $teacher->status;
    }

    public function updateStatus(Teacher $teacher)
    {
        $teacher->update([
            'status' => $this->status,
        ]);

        session()->flash('success', 'Added successfully');
    }

    public function updateNoteStatus(TeacherNote $teacherNote, $value)
    {
        $teacherNote->update([
            'status' => $value,
        ]);

        return redirect()->route('admin.teacher-new-join.show', $this->teacher->id);
    }

    public function updateActivityStatus(TeacherActivity $teacherActivity, $value)
    {
        $teacherActivity->update([
            'status' => $value,
        ]);

        return redirect()->route('admin.teacher-new-join.show', $this->teacher->id);
    }

    public function storeNote(Request $request)
    {
        $validatedData = $this->validate([
            'note' => 'required',
        ]);

        $this->teacher->teacherNote()->create([
            'note' => $this->note,
            'status' => 'pending',
        ]);

        session()->flash('success', 'Added successfully');

        return redirect()->route('admin.teacher-new-join.show', $this->teacher->id);
    }

    public function storeActivity(Request $request)
    {
        $validatedData = $this->validate([
            'activity' => 'required',
        ]);

        $this->teacher->teacherActivity()->create([
            'activity_status' => $this->activity_status,
            'activity_date' => $this->activity_date,
            'activity' => $this->activity,
            'status' => 'pending',
        ]);

        session()->flash('success', 'Added successfully');

        return redirect()->route('admin.teacher-new-join.show', $this->teacher->id);
    }

    public function storeTask(Request $request)
    {
        $validatedData = $this->validate([
            'task' => 'required',
        ]);

        $this->teacher->teacherTask()->create([
            'task' => $this->task,
            'status' => 'pending',
        ]);

        session()->flash('success', 'Added successfully');

        return redirect()->route('admin.teacher-new-join.show', $this->teacher->id);
    }

    public function render()
    {
        $data['teacher_notes'] = TeacherNote::whereHasMorph('notable', [Teacher::class], function (Builder $query) {
            $query->where('id', $this->teacher->id);
        })->latest()->get();

        $data['teacher_activities'] = TeacherActivity::whereHasMorph('activity', [Teacher::class], function (Builder $query) {
            $query->where('id', $this->teacher->id);
        })->latest()->get();

        $data['teacher_tasks'] = TeacherTask::whereHasMorph('task', [Teacher::class], function (Builder $query) {
            $query->where('id', $this->teacher->id);
        })->latest()->get();

        return view('livewire.admin.teacher-new-join.show-component', $data);
    }
}
