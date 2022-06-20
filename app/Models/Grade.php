<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function curriculam(): BelongsTo
    {
        return $this->belongsTo(Curriculam::class, 'curriculam_id');
    }

    public function subjects(): HasMany
    {
        return $this->hasMany(Subject::class, 'grade_id', 'id');
    }
}
