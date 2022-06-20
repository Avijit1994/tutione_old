<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Rackbeat\UIAvatars\HasAvatar;

class Student extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasAvatar, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'register_type',
        'phone',
        'whatsapp',
        'country',
        'birthday',
        'gender',
        'nationality',
        'lead_owner',
        'referral_source',
        'preferable_time',
        'guardian_name',
        'guardian_email',
        'guardian_phone',
        'guardian_relation',
        'school_name',
        'school_grade',
        'school_curriculum',
        'school_course',
        'addressLine1',
        'addressLine2',
        'city',
        'zipcode',
        'status',
    ];

    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatar($size = 64): string
    {
        return $this->getGravatar($this->name, $size);
    }

    public function studentDetail(): HasOne
    {
        return $this->hasOne(StudentDetail::class, 'student_id', 'id');
    }

    public function studentDetails(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(StudentDetail::class, 'student_id', 'id');
    }

    public function teacherNote()
    {
        return $this->morphOne(TeacherNote::class, 'notable');
    }

    public function teacherActivity()
    {
        return $this->morphOne(TeacherActivity::class, 'activity');
    }

    public function teacherTask()
    {
        return $this->morphOne(TeacherTask::class, 'task');
    }
}
