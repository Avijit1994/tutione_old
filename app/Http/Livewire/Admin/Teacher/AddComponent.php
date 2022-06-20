<?php

namespace App\Http\Livewire\Admin\Teacher;

use App\Models\Curriculam;
use App\Models\Grade;
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

    public $first_name;
    public $last_name;
    public $phone_no;
    public $country;
    public $profile_headline;
    public $youtube;
    public $image;
    public $about;
    public $internet_use;
    public $whatsapp;
    public $experience;
    public $teaching_tools;
    public $department;
    public $email;
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

            'curriculams' => [],
            'grades' => [],
            'subjects' => [],
        ]
    );
    private $metaTitle;
    private $metaKeyword;
    private $metaDescription;

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

    public function addRowTeacherSkill()
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

        $this->teacherSkills[] = $new;
    }

    public function removeTeacherSkill($row)
    {
        unset($this->teacherSkills[$row]);
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

    public function storeTeacher(Request $request)
    {
        $imageName = $this->image->storePublicly('teachers', 's3');

        $teacher = Teacher::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'username' => null,
            'email' => $this->email,
            'image' => $imageName,
            'phone' => $this->phone_no,
            'whatsapp' => $this->whatsapp,
            'country' => $this->country,
            'department' => $this->department,
            // 'cv' => $this->cv,
            'experience' => $this->experience,
            'device_use' => $this->teaching_tools,
            'internet_use' => $this->internet_use,
            'profile_headline' => $this->profile_headline,
            'youtube' => $this->youtube,
            'about' => $this->about,
            // 'slug' => Str::slug($this->name),
            'metaTitle' => $this->metaTitle,
            'metaDescription' => $this->metaDescription,
            'metaKeyword' => $this->metaKeyword,
            'active_status' => 1,
            'password' => Hash::make('password'),

        ]);

        foreach ($this->teacherEducations as $teacherEducation) {
            $updateOrCreate = TeacherEducation::create([
                'teacher_id' => $teacher->id,
                'university_name' => $teacherEducation['university_name'],
                'degree' => $teacherEducation['degree'],
                'start_year' => $teacherEducation['start_year'],
                'end_year' => $teacherEducation['end_year'],
                // 'documents' => $teacherEducation['course_certificate'],
            ]);
        }

        foreach ($this->teacherSkills as $teacherSkill) {
            $updateOrCreate = TeacherSkill::create(
                [
                    'teacher_id' => $teacher->id,
                    'curriculam_id' => $teacherSkill['curriculam'],
                    'grade_id' => $teacherSkill['grade'],
                    'subject_id' => $teacherSkill['subject'],
                ],
                [
                    'curriculam_id' => $teacherSkill['curriculam'],
                    'grade_id' => $teacherSkill['grade'],
                    'subject_id' => $teacherSkill['subject'],
                    'pay_rate' => $teacherSkill['pay_rate'],
                    'deleted_at' => null
                ]
            );
        }

        session()->flash('success', 'Added successfully');

        return redirect()->route('admin.teacher.index');
    }

    public function render()
    {
        $data['days'] = [
            'Sunday',
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday'
        ];
        return view('livewire.admin.teacher.add-component', $data);
    }
}
