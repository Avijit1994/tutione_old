<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestQuestion extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'option' => 'json',
    ];

    public function studentTest()
    {
        return $this->hasOne(StudentTest::class, 'test_id');
    }

    public function studentTestDetail()
    {
        return $this->hasOne(StudentTestDetail::class, 'test_question_id');
    }

    public function userStudentTestDetail()
    {
        return $this->hasOne(StudentTestDetail::class, 'test_question_id');
    }
}
