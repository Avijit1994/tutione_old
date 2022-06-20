<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('username')->nullable();
            $table->string('slug')->nullable();
            $table->string('email')->unique();
            $table->string('image')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('country')->nullable();
            $table->string('department')->nullable();
            $table->string('cv')->nullable();
            $table->string('experience')->nullable();
            $table->string('device_use')->nullable();
            $table->string('internet_use')->nullable();
            $table->string('profile_headline')->nullable();
            $table->string('youtube')->nullable();
            $table->string('about')->nullable();
            $table->json('availablity')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('active_status')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('teachers');
    }
}
