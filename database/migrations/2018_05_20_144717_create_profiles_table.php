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
            $table->string('user_fullname',30)->default('Insert Your Fullname');
            $table->string('user_city',30)->default('Insert The City you live in');
            $table->string('user_address',30)->default('Insert Your Address');
            $table->string('user_description',255)->default('Insert Your Description');
            $table->string('user_phone_number',255)->default('Insert Your Phone Number');            
            $table->integer('user_gender')->default(0);
            $table->date('user_date_of_birth')->default(Carbon::parse('first day of January 1945'));
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
