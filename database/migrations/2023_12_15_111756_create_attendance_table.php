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
        Schema::create('attendance', function (Blueprint $table) {
            $table->id('attendance_id');
            $table->string('emp_full_name');
            $table->dateTime('attendance_time_in');
            $table->dateTime('attendance_time_out');
            $table->foreign('emp_full_name')
                ->references('emp_full_name')
                ->on('employee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance');
    }
};
