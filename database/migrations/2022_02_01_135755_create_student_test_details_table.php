<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTestDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_test_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_test_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('test_question_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('answer')->nullable();
            $table->timestamp('given_time');
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
        Schema::dropIfExists('student_test_details');
    }
}
