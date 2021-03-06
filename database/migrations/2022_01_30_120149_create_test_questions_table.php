<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->longText('name');
            $table->enum('option_type', ['text', 'image'])->nullable();
            $table->enum('question_type', ['mcq', 'mcq-written', 'written', 'verbal', 'rapid-fire']);
            $table->json('option')->nullable();
            $table->string('marks')->nullable();
            $table->string('answer')->nullable();
            $table->string('time_to_spend')->nullable();
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
        Schema::dropIfExists('test_questions');
    }
}
