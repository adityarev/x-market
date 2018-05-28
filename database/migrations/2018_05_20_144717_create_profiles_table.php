<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Carbon;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('user_profile_pict',255)->nullable();
            $table->string('user_fullname',30)->nullable();
            $table->string('user_city',30)->nullable();
            $table->string('user_address',30)->nullable();
            $table->string('user_description',255)->nullable();
            $table->string('user_phone_number',255)->nullable();            
            $table->integer('user_gender')->nullable();
            $table->date('user_date_of_birth')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
