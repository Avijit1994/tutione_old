<?php

namespace App\Http\Livewire;

use App\Models\Curriculam;
use App\Models\Grade;
use App\Models\Student;
use App\Models\StudentDemo;
use App\Models\StudentDetail;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class BookTrialClassComponent extends Component
{
    public $student_name;
    public $student_email;
    public $phone_no;
    public $teacher;

    public $curriculam;

    public $grade;

    public $subject = [];
    public $school_name;
    public $guardian_name;
    public $guardian_email;
    public $password;

    public function mount(Request $request)
    {
        $this->curriculam = $request->curriculam ?? '';
        $this->grade = $request->grade ?? '';
        $this->subject = $request->subject ?? [];
        $this->teacher = $request->teacher ?? '';
    }

    public function hydrate()
    {
        $this->emit('initSelect2');
    }

    public function submit()
    {
        $this->validate([
            'student_name' => ['required'],
            'student_email' => ['required', 'unique:students,email'],
            'phone_no' => ['required'],
            'curriculam' => ['required'],
            'grade' => ['required'],
        ]);

        $student = Student::create([
            'name' => $this->student_name,
            'phone' => $this->phone_no,
            'email' => $this->student_email,
            'school_name' => $this->school_name,
            'guardian_name' => $this->guardian_name,
            'guardian_email' => $this->guardian_email,
            'password' => $this->password ? Hash::make($this->password) : Hash::make('password'),
            'register_type' => 'book-demo',
            'status' => 'enquired'
        ]);

        $studentDemo = StudentDetail::create([
            'student_id' => $student->id,
            'curriculam_id' => $this->curriculam,
            'grade_id' => $this->grade,
//            'subject_id' => $this->subject,
//            'teacher_id' => $this->teacher,
        ]);

        return redirect(route('join-us.success'))->with('success');
    }

    public function render()
    {
        $data['curriculams'] = Curriculam::get();
        $data['grades'] = Grade::where('curriculam_id', $this->curriculam)->get();
        $data['subjects'] = Subject::where('grade_id', $this->grade)->get();

        $data['teachers'] = Teacher::whereHas('teacherSkill', function ($query) {
            return $query->whereIn('subject_id', $this->subject);
        })->get();

        return view('livewire.book-trial-class-component', $data);
    }
}
