<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results_students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('results_id');
            $table->unsignedBigInteger('students_id');
            $table->foreign('results_id')->references('id')->on('results');
            $table->foreign('students_id')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results_students');
    }
};
