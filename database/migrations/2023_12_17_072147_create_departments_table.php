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
        Schema::create('department-employee',function (Blueprint $table){

            $table->id('dep_emp_id');
            $table->string('emp_full_name');
            $table->string('emp_type_id');
            $table->string('dep_name');
            $table->foreign('emp_full_name')
                ->references('emp_full_name')
                ->on('employee');
            $table->foreign('emp_type_id')
                ->references('emp_type_id')
                ->on('employee_type');
            $table->foreign('dep_name')
                ->references('dep_name')
                ->on('department');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
};
