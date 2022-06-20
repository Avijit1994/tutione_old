<?php

namespace App\Http\Livewire\Admin\StudentNewRegister;

use App\Models\Student;
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
    public $student;
    public $note;
    public $activity_status;
    public $activity_date;
    public $activity;
    public $task;

    public function mount(Student $student)
    {
        $student->load('studentDetail.curriculam','studentDetail.grade','studentDetail.subject');

        $this->student = $student;
        $this->status = $student->status;
    }

    public function updateStatus(Student $student)
    {
        $student->update([
            'status' => $this->status,
        ]);

        session()->flash('success', 'Added successfully');
    }

    public function updateNoteStatus(TeacherNote $teacherNote, $value)
    {
        $teacherNote->update([
            'status' => $value,
        ]);

        return redirect()->route('admin.student-new-register.show', $this->student->id);
    }

    public function updateActivityStatus(TeacherActivity $teacherActivity, $value)
    {
        $teacherActivity->update([
            'status' => $value,
        ]);

        return redirect()->route('admin.student-new-register.show', $this->student->id);
    }

    public function storeNote(Request $request)
    {
        $validatedData = $this->validate([
            'note' => 'required',
        ]);

        $this->student->teacherNote()->create([
            'note' => $this->note,
            'status' => 'pending',
        ]);

        session()->flash('success', 'Added successfully');

        return redirect()->route('admin.student-new-register.show', $this->student->id);
    }

    public function storeActivity(Request $request)
    {
        $validatedData = $this->validate([
            'activity' => 'required',
        ]);

        $this->student->teacherActivity()->create([
            'activity_status' => $this->activity_status,
            'activity_date' => $this->activity_date,
            'activity' => $this->activity,
            'status' => 'pending',
        ]);

        session()->flash('success', 'Added successfully');

        return redirect()->route('admin.student-new-register.show', $this->student->id);
    }

    public function storeTask(Request $request)
    {
        $validatedData = $this->validate([
            'task' => 'required',
        ]);

        $this->student->teacherTask()->create([
            'task' => $this->task,
            'status' => 'pending',
        ]);

        session()->flash('success', 'Added successfully');

        return redirect()->route('admin.student-new-register.show', $this->student->id);
    }

    public function render()
    {
        $data['teacher_notes'] = TeacherNote::whereHasMorph('notable', [Student::class], function (Builder $query) {
            $query->where('id', $this->student->id);
        })->latest()->get();

        $data['teacher_activities'] = TeacherActivity::whereHasMorph('activity', [Student::class], function (Builder $query) {
            $query->where('id', $this->student->id);
        })->latest()->get();

        $data['teacher_tasks'] = TeacherTask::whereHasMorph('task', [Student::class], function (Builder $query) {
            $query->where('id', $this->student->id);
        })->latest()->get();

        return view('livewire.admin.student-new-register.show-component', $data);
    }
}
