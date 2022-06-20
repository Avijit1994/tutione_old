<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Rackbeat\UIAvatars\HasAvatar;

class Teacher extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasAvatar, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'image',
        'phone',
        'whatsapp',
        'country',
        'department',
        'status',
        'experience',
        'device_use',
        'internet_use',
        'profile_headline',
        'youtube',
        'about',
        'password',
        'active_status'
    ];

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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'category_ids' => 'json',
        'availability' => 'json',
    ];

    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getNameAttribute(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getAvatar($size = 64): string
    {
        return $this->getGravatar($this->name, $size);
    }

    public function teacherSkill(): HasMany
    {
        return $this->hasMany(TeacherSkill::class, 'teacher_id', 'id');
    }

    public function teacherEducation(): HasMany
    {
        return $this->hasMany(TeacherEducation::class, 'teacher_id', 'id');
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
