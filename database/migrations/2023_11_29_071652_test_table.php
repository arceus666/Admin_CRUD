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
        Schema::create('crud', function(Blueprint $table){
            $table->id('user_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('lname');
            $table->string('birthdate');
            $table->string('nationality');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('civil_status');
            $table->string('gender');
            $table->string('email');
            $table->string('phone_number');
            $table->string('document_type');
            $table->string('identity_number');
            $table->string('designation');
            $table->string('upload_profile');

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
