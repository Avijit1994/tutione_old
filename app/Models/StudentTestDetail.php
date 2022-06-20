<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentTestDetail extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function studentTest()
    {
        return $this->belongsTo(StudentTest::class, 'student_test_id');
    }

    public function testQuestion()
    {
        return $this->belongsTo(TestQuestion::class, 'test_question_id');
    }
}
