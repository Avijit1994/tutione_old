<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('curriculam_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('grade_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('subject_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('name');
            $table->longText('description');
            $table->string('slug')->nullable();
            $table->string('duration')->nullable();
            $table->string('marks')->nullable();
            $table->enum('question_type', ['mcq', 'mcq-written', 'written', 'verbal', 'rapid-fire'])->default('mcq');
            $table->boolean('active_status')->default(1);
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
        Schema::dropIfExists('tests');
    }
}
