<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_tasks', function (Blueprint $table) {
            $table->id();
            $table->morphs('task');
            $table->foreignId('teacher_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('task');
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
        Schema::dropIfExists('teacher_tasks');
    }
}
