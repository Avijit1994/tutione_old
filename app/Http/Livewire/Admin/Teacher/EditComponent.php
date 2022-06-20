<?php

namespace App\Http\Livewire\Admin\Teacher;

use App\Models\Curriculam;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\TeacherEducation;
use App\Models\TeacherSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditComponent extends Component
{
    use WithFileUploads;

    public $first_name;
    public $last_name;
    public $phone_no;
    public $country;
    public $profile_headline;
    public $youtube;
    public $image;
    public $update_image;
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

    public $teacher;
    private $metaTitle;
    private $metaKeyword;
    private $metaDescription;

    public function mount($teacher)
    {
        $this->teacherSkills[0]['curriculams'] = Curriculam::get();
        $this->teacherSkills[0]['grades'] = collect();
        $this->teacherSkills[0]['subjects'] = collect();

        $this->teacher = $teacher;
        $this->first_name = $teacher->first_name;
        $this->last_name = $teacher->last_name;
        $this->phone_no = $teacher->phone;
        $this->country = $teacher->country;
        $this->profile_headline = $teacher->profile_headline;
        $this->youtube = $teacher->youtube;
        $this->image = $teacher->image;
        $this->about = $teacher->about;
        $this->internet_use = $teacher->internet_use;
        $this->whatsapp = $teacher->whatsapp;
        $this->experience = $teacher->experience;
        $this->teaching_tools = $teacher->device_use;
        $this->department = $teacher->department;
        $this->email = $teacher->email;
        if ($teacher->teacherEducation) {

            foreach ($teacher->teacherEducation as $key => $value) {
                $this->teacherEducations[$key] = [
                    'university_name' => $value->university_name,
                    'degree' => $value->degree,
                    'start_year' => $value->start_year,
                    'end_year' => $value->end_year,
                    'course_certificate' => $value->course_certificate,
                ];
            }
        }

        if ($teacher->teacherSkill) {
            foreach ($teacher->teacherSkill as $key => $value) {
                $this->teacherSkills[$key] = [
                    'curriculam' => $value->curriculam_id,
                    'grade' => $value->grade_id,
                    'subject' => $value->subject_id,
                    'pay_rate' => $value->pay_rate,

                    'curriculams' => Curriculam::get(),
                    'grades' => Grade::where('curriculam_id', $value->curriculam_id)->get(),
                    'subjects' => Subject::where('grade_id', $value->grade_id)->get(),
                ];
            }
        }
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
        // dd($request->all());
        // $validatedData = $this->validate([
        //     'name' => 'required',
        //     'attribute_set_id' => 'required',
        //     'type' => 'required',
        //     'is_filterable' => 'required',
        //     'active_status' => 'required',

        //     'entries.*.value' => 'required',
        // ]);
        if ($this->update_image) {
            $imageName = $this->update_image->storePublicly('teachers', 's3');
        } else {
            $imageName = $this->image;
        }

        $this->teacher->update([
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

        $teacherEducationsToDelete = TeacherEducation::whereTeacherId($this->teacher->id)->pluck('id', 'id');

        foreach ($this->teacherEducations as $teacherEducation) {

            $updateOrCreate = TeacherEducation::withTrashed()->updateOrCreate(
                [
                    'teacher_id' => $this->teacher->id,
                    'university_name' => $teacherEducation['university_name'],
                    'degree' => $teacherEducation['degree'],
                    'start_year' => $teacherEducation['start_year'],
                    'end_year' => $teacherEducation['end_year'],],
                [
                    'university_name' => $teacherEducation['university_name'],
                    'degree' => $teacherEducation['degree'],
                    'start_year' => $teacherEducation['start_year'],
                    'end_year' => $teacherEducation['end_year'],
                    // 'documents' => $teacherEducation['course_certificate'],
                    'deleted_at' => null
                ]
            );

            if (!empty($teacherEducationsToDelete[$updateOrCreate->id])) {
                unset($teacherEducationsToDelete[$updateOrCreate->id]);
            }
        }

        if (count($teacherEducationsToDelete)) {
            TeacherEducation::whereIn('id', $teacherEducationsToDelete)->delete();
        }


        $teacherSkillsToDelete = TeacherSkill::whereTeacherId($this->teacher->id)->pluck('id', 'id');

        foreach ($this->teacherSkills as $teacherSkill) {

            $updateOrCreate = TeacherSkill::withTrashed()->updateOrCreate(
                [
                    'teacher_id' => $this->teacher->id,
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

            if (!empty($teacherSkillsToDelete[$updateOrCreate->id])) {
                unset($teacherSkillsToDelete[$updateOrCreate->id]);
            }
        }

        if (count($teacherSkillsToDelete)) {
            TeacherSkill::whereIn('id', $teacherSkillsToDelete)->delete();
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

        return view('livewire.admin.teacher.edit-component',$data);
    }
}
