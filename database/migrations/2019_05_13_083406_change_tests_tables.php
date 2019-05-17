<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeTestsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tests', function (Blueprint $table) {
            $table->renameColumn('trainees_id', 'trainee_id');
            $table->unsignedInteger('phase_id');
            $table->smallInteger('status')->default(0);
            $table->string('content')->nullable();
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tests', function (Blueprint $table) {
            $table->renameColumn('trainee_id', 'trainees_id');
            $table->dropColumn('phase_id');
            $table->dropColumn('status');
            $table->dropColumn('content');
            $table->dropColumn('description');
        });
    }
}
