<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Curriculam
 *
 * @property int $id
 * @property string $name
 * @property string|null $slug
 * @property string|null $description
 * @property string|null $image
 * @property int $active_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculam newQuery()
 * @method static \Illuminate\Database\Query\Builder|Curriculam onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculam query()
 * @method static \Illuminate\Database\Query\Builder|Curriculam withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Curriculam withoutTrashed()
 */
	class Curriculam extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Grade
 *
 * @property int $id
 * @property int $curriculam_id
 * @property string $name
 * @property string|null $slug
 * @property string|null $description
 * @property int $active_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Curriculam $curriculam
 * @method static \Database\Factories\GradeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Grade newQuery()
 * @method static \Illuminate\Database\Query\Builder|Grade onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Grade query()
 * @method static \Illuminate\Database\Query\Builder|Grade withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Grade withoutTrashed()
 */
	class Grade extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Student
 *
 * @method static \Database\Factories\StudentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student query()
 */
	class Student extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StudentTest
 *
 * @property int $id
 * @property int $user_id
 * @property int $test_id
 * @property int|null $review
 * @property string|null $given_at
 * @property int $active_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\StudentTestDetail[] $studentTestDetails
 * @property-read int|null $student_test_details_count
 * @property-read \App\Models\Test $test
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\StudentTestFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentTest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentTest newQuery()
 * @method static \Illuminate\Database\Query\Builder|StudentTest onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentTest query()
 * @method static \Illuminate\Database\Query\Builder|StudentTest withTrashed()
 * @method static \Illuminate\Database\Query\Builder|StudentTest withoutTrashed()
 */
	class StudentTest extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StudentTestDetail
 *
 * @property int $id
 * @property int $student_test_id
 * @property int $test_question_id
 * @property string|null $answer
 * @property string $given_time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\StudentTest $studentTest
 * @property-read \App\Models\TestQuestion $testQuestion
 * @method static \Database\Factories\StudentTestDetailFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentTestDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentTestDetail newQuery()
 * @method static \Illuminate\Database\Query\Builder|StudentTestDetail onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentTestDetail query()
 * @method static \Illuminate\Database\Query\Builder|StudentTestDetail withTrashed()
 * @method static \Illuminate\Database\Query\Builder|StudentTestDetail withoutTrashed()
 */
	class StudentTestDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Subject
 *
 * @property int $id
 * @property int $curriculam_id
 * @property int $grade_id
 * @property string $name
 * @property string|null $slug
 * @property string|null $description
 * @property string|null $image
 * @property int $active_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Grade $grade
 * @method static \Database\Factories\SubjectFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subject newQuery()
 * @method static \Illuminate\Database\Query\Builder|Subject onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Subject query()
 * @method static \Illuminate\Database\Query\Builder|Subject withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Subject withoutTrashed()
 */
	class Subject extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Teacher
 *
 * @property int $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $username
 * @property string $email
 * @property string|null $image
 * @property string|null $phone
 * @property string|null $whatsapp
 * @property string|null $country
 * @property string|null $department
 * @property string|null $cv
 * @property string|null $experience
 * @property string|null $device_use
 * @property string|null $profile_headline
 * @property string|null $youtube
 * @property string|null $about
 * @property mixed|null $availablity
 * @property string|null $email_verified_at
 * @property string $password
 * @property int $active_status
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TeacherEducation[] $teacherEducation
 * @property-read int|null $teacher_education_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TeacherSkill[] $teacherSkill
 * @property-read int|null $teacher_skill_count
 * @method static \Database\Factories\TeacherFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher newQuery()
 * @method static \Illuminate\Database\Query\Builder|Teacher onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher query()
 * @method static \Illuminate\Database\Query\Builder|Teacher withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Teacher withoutTrashed()
 */
	class Teacher extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TeacherEducation
 *
 * @property int $id
 * @property int $teacher_id
 * @property string|null $university_name
 * @property string|null $degree
 * @property string|null $start_year
 * @property string|null $end_year
 * @property mixed|null $documents
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Database\Factories\TeacherEducationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherEducation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherEducation newQuery()
 * @method static \Illuminate\Database\Query\Builder|TeacherEducation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherEducation query()
 * @method static \Illuminate\Database\Query\Builder|TeacherEducation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|TeacherEducation withoutTrashed()
 */
	class TeacherEducation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TeacherSkill
 *
 * @property int $id
 * @property int $teacher_id
 * @property int|null $curriculam_id
 * @property int|null $grade_id
 * @property int|null $subject_id
 * @property float|null $pay_rate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Database\Factories\TeacherSkillFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherSkill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherSkill newQuery()
 * @method static \Illuminate\Database\Query\Builder|TeacherSkill onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherSkill query()
 * @method static \Illuminate\Database\Query\Builder|TeacherSkill withTrashed()
 * @method static \Illuminate\Database\Query\Builder|TeacherSkill withoutTrashed()
 */
	class TeacherSkill extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Test
 *
 * @property int $id
 * @property int $curriculam_id
 * @property int $grade_id
 * @property int $subject_id
 * @property string $name
 * @property string $description
 * @property string|null $slug
 * @property string|null $duration
 * @property string|null $marks
 * @property string $question_type
 * @property int $active_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Curriculam $curriculam
 * @property-read \App\Models\Grade $grade
 * @property-read \App\Models\Subject $subject
 * @method static \Database\Factories\TestFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Test newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Test newQuery()
 * @method static \Illuminate\Database\Query\Builder|Test onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Test query()
 * @method static \Illuminate\Database\Query\Builder|Test withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Test withoutTrashed()
 */
	class Test extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TestQuestion
 *
 * @property int $id
 * @property int $test_id
 * @property string $name
 * @property string|null $option_type
 * @property string $question_type
 * @property array|null $option
 * @property string|null $marks
 * @property string|null $answer
 * @property string|null $time_to_spend
 * @property int $active_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\StudentTest|null $studentTest
 * @property-read \App\Models\StudentTestDetail|null $studentTestDetail
 * @property-read \App\Models\StudentTestDetail|null $userStudentTestDetail
 * @method static \Illuminate\Database\Eloquent\Builder|TestQuestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestQuestion newQuery()
 * @method static \Illuminate\Database\Query\Builder|TestQuestion onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TestQuestion query()
 * @method static \Illuminate\Database\Query\Builder|TestQuestion withTrashed()
 * @method static \Illuminate\Database\Query\Builder|TestQuestion withoutTrashed()
 */
	class TestQuestion extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $type
 * @property string $name
 * @property string|null $username
 * @property string $email
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property int $active_status
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\Subject $subject
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @property-read \App\Models\UserDetail|null $userDetail
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserDetail
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $curriculam_id
 * @property int|null $grade_id
 * @property int|null $subject_id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $phone
 * @property string|null $whatsapp
 * @property string|null $country
 * @property string|null $department
 * @property string|null $cv
 * @property string|null $experience
 * @property string|null $device_use
 * @property mixed|null $education
 * @property mixed|null $teaching_details
 * @property mixed|null $profile_headline
 * @property mixed|null $youtube
 * @property mixed|null $about
 * @property mixed|null $availablity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $userDetail
 * @method static \Database\Factories\UserDetailFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail query()
 */
	class UserDetail extends \Eloquent {}
}

