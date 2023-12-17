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
        Schema::create('gender', function (Blueprint $table){

            $table->id('gender_id');
            $table->string('emp_gender')->index();

        });
        Schema::create('location', function (Blueprint $table){

            $table->id('location_id');
            $table->string('location_name')->index();

        });
        Schema::create('employee_type', function (Blueprint $table){

            $table->id('employee_type_id');
            $table->string('emp_type_id')->index();

        });
        Schema::create('department', function (Blueprint $table) {
            $table->id('dep_id');
            $table->string('dep_name')->index();
        });
        Schema::create('shift', function (Blueprint $table) {
            $table->id('shift_id');
            $table->string('shift_name')->index();
            $table->time('shift_time_in')->index();
            $table->time('shift_time_out')->index();
        });

        Schema::create('employee', function(Blueprint $table){
            $table->id('employee_id');
            $table->string('emp_user_name');
            $table->string('emp_password');
            $table->string('dep_name');
            $table->string('emp_type_id');
            $table->string('location_name');
            $table->string('shift_name');
            $table->time('shift_time_in');
            $table->time('shift_time_out');
            $table->string('emp_gender');
            $table->date('emp_joining_data');
            $table->string('emp_full_name')->index();
            $table->date('emp_dob');
            $table->string('emp_address');
            $table->integer('emp_contact');
            $table->string('emp_email');
            $table->foreign('shift_name')
                ->references('shift_name')
                ->on('shift');
            $table->foreign('dep_name')
            ->references('dep_name')
            ->on('department');
            $table->foreign('emp_type_id')
            ->references('emp_type_id')
            ->on('employee_type');
            $table->foreign('location_name')
            ->references('location_name')
            ->on('location');
            $table->foreign('emp_gender')
                ->references('emp_gender')
                ->on('gender');

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
