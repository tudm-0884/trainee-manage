<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('dob')->nullable();
            $table->integer('office_id');
            $table->integer('trainer_id');
            $table->integer('language_id');
            $table->integer('staff_type_id');
            $table->integer('user_id');
            $table->string('gender');
            $table->string('graduation_year');
            $table->integer('batch_id');
            $table->integer('universities_id');
            $table->dateTime('internship_start_time');
            $table->dateTime('internship_end_time');
            $table->integer('course_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainees');
    }
}
