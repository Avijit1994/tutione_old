<?php

namespace App\Http\Livewire\Auth;

use App\Models\Curriculam;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegisterComponent extends Component
{
    public $fullName;
    public $email;
    public $phone;
    public $password;
    public $curriculam;
    public $grade;
    public $type;
    public $goal;
    public int $currentStep = 1;

    public function register_n()
    {
        $this->validate([
            'userName' => ['required'],
            'phone' => ['required'],
            'curriculam' => ['required'],
            'grade' => ['required'],
            'email' => ['required', 'email', 'unique:students'],
            'password' => ['required', 'min:8'],
        ]);

        $user = Student::create([
            'name' => $this->userName,
            'email' => $this->email,
            'phone' => $this->phone,
            'password' => Hash::make($this->password),
            'register_type' => 'self'
        ]);

        $user->studentDetail()->create([
            'curriculam_id' => $this->curriculam,
            'grade_id' => $this->grade,
        ]);

        event(new Registered($user));

        Auth::guard('web')->login($user, true);

        return redirect()->intended(route('student.dashboard'));
    }

    public function updatingCurriculam($value)
    {
        $this->currentStep = 2;
    }

    public function updatedGrade($value)
    {
        $this->currentStep = 3;
    }

    public function updatedGoal($value)
    {
        $this->currentStep = 4;
    }

    public function updatedType($value)
    {
        $this->currentStep = 5;
    }

//    public function updating($name, $value)
//    {
//        //
//    }
//
//    public function updated($name, $value)
//    {
//        //
//    }

    public function fifthStepSubmit()
    {
         $validatedData = $this->validate([
             'fullName' => 'required',
         ]);

        $this->currentStep = 6;
    }

    public function sixthStepSubmit()
    {
         $validatedData = $this->validate([
             'email' => 'required',
         ]);

        $this->currentStep = 7;
    }

    public function seventhStepSubmit()
    {
         $validatedData = $this->validate([
             'phone' => 'required',
         ]);

        $this->currentStep = 8;
    }

    public function eighthStepSubmit()
    {
        $this->validate([
            'fullName' => ['required'],
            'phone' => ['required'],
            'curriculam' => ['required'],
            'grade' => ['required'],
            'email' => ['required', 'email', 'unique:students'],
            'password' => ['required', 'min:8'],
        ]);

        $user = Student::create([
            'name' => $this->fullName,
            'email' => $this->email,
            'phone' => $this->phone,
            'password' => Hash::make($this->password),
            'register_type' => 'self'
        ]);

        $user->studentDetail()->create([
            'curriculam_id' => $this->curriculam,
            'grade_id' => $this->grade,
        ]);

        event(new Registered($user));

        return redirect()->intended(route('join-us.success'));

//        Auth::guard('web')->login($user, true);

//        return redirect()->intended(route('student.dashboard'));
    }

    public function render()
    {
        $data['curriculams'] = Curriculam::get();
        $data['grades'] = Grade::whereCurriculamId($this->curriculam)->get();
        $data['subjects'] = Subject::whereCurriculamId($this->curriculam)->whereGradeId($this->grade)->get();

        return view('livewire.auth.register-component', $data);
    }
}
