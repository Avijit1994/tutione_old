<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentDemosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_demos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('curriculam_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('grade_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('teacher_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->json('subject_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_demos');
    }
}
