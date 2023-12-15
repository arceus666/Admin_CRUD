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
        Schema::create('employee', function(Blueprint $table){
            $table->id('employee_id');
            $table->string('emp_user_name');
            $table->string('emp_password');
            $table->string('dep_name');
            $table->string('emp_type_id');
            $table->string('location_id');
            $table->string('location_name');
            $table->bigInteger('shift_id');
            $table->string('shift_name');
            $table->dateTime('shift_time_in');
            $table->dateTime('shift_time_out');
            $table->string('emp_gender');
            $table->date('emp_joining_data');
            $table->string('emp_full_name');
            $table->date('emp_dob');
            $table->string('emp_address');
            $table->integer('emp_contact');
            $table->string('emp_email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
