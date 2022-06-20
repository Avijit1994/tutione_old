<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentTest extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function studentTestDetails(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(StudentTestDetail::class, 'student_test_id');
    }

    public function student(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function test()
    {
        return $this->belongsTo(Test::class, 'test_id')->withTrashed();
    }
}
