<?php

namespace App\Http\Livewire\Admin\Student;

use App\Models\Curriculam;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\TeacherEducation;
use App\Models\TeacherSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $phone;
    public $country;
    public $nationality;
    public $birthday;
    public $gender;
    public $lead_owner;
    public $youtube;
    public $image;
    public $about;
    public $referral_source;
    public $preferable_time;
    public $whatsapp;
    public $experience;
    public $teaching_tools;
    public $guardian_name;
    public $guardian_email;
    public $guardian_phone;
    public $guardian_relation;
    public $email;
    public $school_name;
    public $school_grade;
    public $school_curriculum;
    public $school_course;
    public $addressLine1;
    public $addressLine2;
    public $zipcode;
    public $city;

    public $studentSkills = array(
        [
            'curriculam' => null,
            'grade' => null,
            'subject' => null,
            'pay_rate' => null,

            'curriculams' => [],
            'grades' => [],
            'subjects' => [],
        ]
    );
    public function updatedStudentSkills($key, $value)
    {
        $data = explode(".", $value);

        if ($data[1] == 'curriculam') {
            $this->studentSkills[$data[0]]['curriculams'] = Curriculam::get();
            $this->studentSkills[$data[0]]['grades'] = Grade::where('curriculam_id', $this->studentSkills[$data[0]]['curriculam'])->get();
        }

        if ($data[1] == 'grade') {
            $this->studentSkills[$data[0]]['curriculams'] = Curriculam::get();
            $this->studentSkills[$data[0]]['grades'] = Grade::where('curriculam_id', $this->studentSkills[$data[0]]['curriculam'])->get();
            $this->studentSkills[$data[0]]['subjects'] = Subject::where('grade_id', $this->studentSkills[$data[0]]['grade'])->get();
        }

        if ($data[1] == 'subject') {
            $this->studentSkills[$data[0]]['curriculams'] = Curriculam::get();
            $this->studentSkills[$data[0]]['grades'] = Grade::where('curriculam_id', $this->studentSkills[$data[0]]['curriculam'])->get();
            $this->studentSkills[$data[0]]['subjects'] = Subject::where('grade_id', $this->studentSkills[$data[0]]['grade'])->get();
        }
    }

    public function addRowStudentSkill()
    {
        $new = array(
            'curriculam' => null,
            'grade' => null,
            'subject' => null,
            'pay_rate' => null,
            'curriculams' => Curriculam::get(),
            'grades' => collect(),
            'subjects' => collect(),
        );

        $this->studentSkills[] = $new;
    }

    public function removeStudentSkill($row)
    {
        unset($this->studentSkills[$row]);
    }

    public function storeStudent(Request $request)
    {
//        $imageName = $this->image->storePublicly('teachers', 's3');

        $teacher = Student::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'whatsapp' => $this->whatsapp,
            'country' => $this->country,
            'birthday' => $this->birthday,
            'gender' => $this->gender,
            'nationality' => $this->nationality,
            'lead_owner' => $this->lead_owner,
            'referral_source' => $this->referral_source,
            'preferable_time' => $this->preferable_time,
            'guardian_name' => $this->guardian_name,
            'guardian_email' => $this->guardian_email,
            'guardian_phone' => $this->guardian_phone,
            'guardian_relation' => $this->guardian_relation,
            'school_name' => $this->school_name,
            'school_grade' => $this->school_grade,
            'school_curriculum' => $this->school_curriculum,
            'school_course' => $this->school_course,
            'addressLine1' => $this->addressLine1,
            'addressLine2' => $this->addressLine2,
            'city' => $this->city,
            'zipcode' => $this->zipcode,
            'active_status' => 1,
            'password' => Hash::make('password'),
        ]);

        foreach ($this->studentSkills as $studentSkill) {
            $updateOrCreate = TeacherSkill::create(
                [
                    'teacher_id' => $teacher->id,
                    'curriculam_id' => $studentSkill['curriculam'],
                    'grade_id' => $studentSkill['grade'],
                    'subject_id' => $studentSkill['subject'],
                ],
                [
                    'curriculam_id' => $studentSkill['curriculam'],
                    'grade_id' => $studentSkill['grade'],
                    'subject_id' => $studentSkill['subject'],
                    'deleted_at' => null
                ]
            );
        }

        session()->flash('success', 'Added successfully');

        return redirect()->route('admin.student.index');
    }

    public function render()
    {
        return view('livewire.admin.student.add-component');
    }
}
