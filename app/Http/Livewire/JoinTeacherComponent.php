<?php

namespace App\Http\Livewire;

use App\Models\Curriculam;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\TeacherEducation;
use App\Models\TeacherSkill;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class JoinTeacherComponent extends Component
{

    use WithFileUploads;

    public $currentStep = 1;
    public $first_name;
    public $last_name;
    public $phone;
    public $email;
    public $whatsapp;
    public $country;
    public $experience;
    public $internet_use;
    public $teaching_tools;
    public $profile_headline;
    public $youtube_bio;
    public $profile_description;
    public $profile_photo;


    public $availabilityDays = ["Monday" => 1, "Tuesday" => 2, "Wednesday" => 3, "Thursday" => 4, "Friday" => 5, "Saturday" => 6, "Sunday" => 7];

    public $teacherEducations = array(
        [
            'university_name' => null,
            'degree' => null,
            'start_year' => null,
            'end_year' => null,
            'course_certificate' => null,
        ]
    );

    public $teacherSkills = array(
        [
            'curriculam' => null,
            'grade' => null,
            'subject' => null,
            'pay_rate' => null,

            'curriculams' => null,
            'grades' => null,
            'subjects' => null,
        ]
    );

    public function mount()
    {
        $this->teacherSkills[0]['curriculams'] = Curriculam::get();
        $this->teacherSkills[0]['grades'] = collect();
        $this->teacherSkills[0]['subjects'] = collect();
    }


    public function updatedTeacherSkills($key, $value)
    {
        $data = explode(".", $value);

        if ($data[1] == 'curriculam') {
            $this->teacherSkills[$data[0]]['curriculams'] = Curriculam::get();
            $this->teacherSkills[$data[0]]['grades'] = Grade::where('curriculam_id', $this->teacherSkills[$data[0]]['curriculam'])->get();
        }

        if ($data[1] == 'grade') {
            $this->teacherSkills[$data[0]]['curriculams'] = Curriculam::get();
            $this->teacherSkills[$data[0]]['grades'] = Grade::where('curriculam_id', $this->teacherSkills[$data[0]]['curriculam'])->get();
            $this->teacherSkills[$data[0]]['subjects'] = Subject::where('grade_id', $this->teacherSkills[$data[0]]['grade'])->get();
        }

        if ($data[1] == 'subject') {
            $this->teacherSkills[$data[0]]['curriculams'] = Curriculam::get();
            $this->teacherSkills[$data[0]]['grades'] = Grade::where('curriculam_id', $this->teacherSkills[$data[0]]['curriculam'])->get();
            $this->teacherSkills[$data[0]]['subjects'] = Subject::where('grade_id', $this->teacherSkills[$data[0]]['grade'])->get();
        }
    }

    public function addRowTeacherEducations()
    {
        $new = array(
            'university_name' => null,
            'degree' => null,
            'start_year' => null,
            'end_year' => null,
            'course_certificate' => null,
        );

        $this->teacherEducations[] = $new;
    }

    public function removeRowTeacherEducations($row)
    {
        unset($this->teacherEducations[$row]);
    }

    public function addRowTeacherSkills()
    {
        $new = array(
            'curriculum' => null,
            'grade' => null,
            'subject' => null,
            'pay_rate' => null,
            'curriculams' => Curriculam::get(),
            'grades' => collect(),
            'subjects' => collect(),
        );

        $this->teacherSkills[] = $new;
    }

    public function removeRowTeacherSkills($row)
    {
        unset($this->teacherSkills[$row]);
    }

    public function removeTeacherSkill($row)
    {
        unset($this->teacherSkills[$row]);
    }

    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'first_name' => ['required'],
            'email' => ['required', 'unique:teachers,email'],
            'country' => ['required'],
            'phone' => ['required', Rule::phone()->country([$this->country])->type('mobile')],
            'internet_use' => ['required'],
        ]);

        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        // $validatedData = $this->validate([
        //     'status' => 'required',
        // ]);

        $this->currentStep = 3;
    }

    public function thirdStepSubmit()
    {
        // $validatedData = $this->validate([
        //     'status' => 'required',
        // ]);

        $this->currentStep = 4;
    }

    public function fourthStepSubmit()
    {
        // $validatedData = $this->validate([
        //     'status' => 'required',
        // ]);

        $this->currentStep = 5;
    }

    public function fifthStepSubmit()
    {
        $validatedData = $this->validate([
            'profile_headline' => 'required',
        ]);

        $this->currentStep = 6;
    }

    public function joinTeacher()
    {
        // $this->validate([
        //     'name' => ['required'],
        //     'email' => ['required', 'email', 'unique:users'],
        //     'password' => ['required', 'min:8', 'same:passwordConfirmation'],
        // ]);
        $profile_photo = '';
//        $image = $this->profile_photo->store('teachers');
        $image = $this->profile_photo->storePublicly('teachers', 's3');

        $teacher = Teacher::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'username' => null,
            'email' => $this->email,
            'image' => $image,
            'phone' => $this->phone,
            'whatsapp' => $this->whatsapp,
            'country' => $this->country,
//            'department' => $this->department,
            // 'cv' => $this->cv,
            'experience' => $this->experience,
            'device_use' => $this->teaching_tools,
            'internet_use' => $this->internet_use,
            'profile_headline' => $this->profile_headline,
            'youtube' => $this->youtube_bio,
            'about' => $this->profile_description,
            // 'slug' => Str::slug($this->name),
            'active_status' => 0,
            'status' => 'enquired',
            'password' => Hash::make('password'),

        ]);

        $teacherEducations = array();

        foreach ($this->teacherEducations as $teacherEducation) {
            $teacherEducations[] = new TeacherEducation(array(
                'university_name' => $teacherEducation['university_name'],
                'degree' => $teacherEducation['degree'],
                'start_year' => $teacherEducation['start_year'],
                'end_year' => $teacherEducation['end_year'],
                 'documents' => $teacherEducation['course_certificate']->storePublicly('teachers', 's3'),
            ));
        }

        $teacher->teacherEducation()->saveMany($teacherEducations);

        $teacherSkills = array();

        foreach ($this->teacherSkills as $teacherSkill) {
            $teacherSkills[] = new TeacherSkill([
                'curriculam_id' => $teacherSkill['curriculam'],
                'grade_id' => $teacherSkill['grade'],
                'subject_id' => $teacherSkill['subject'],
                'pay_rate' => $teacherSkill['pay_rate'],
            ]);
        }

        $teacher->teacherSkill()->saveMany($teacherSkills);


        return redirect(route('join-us.success'))->with('success');
    }

    public function render()
    {
        return view('livewire.join-teacher-component');
    }
}
