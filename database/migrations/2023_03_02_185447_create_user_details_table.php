<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->string('postal_code');
            $table->string('about_me');
            $table->string('city_id');
            $table->string('state_id');
            $table->string('country_id');
            $table->string('date_of_birth');
            $table->string('description');
            $table->string('language');
            $table->integer('profession_id');
            $table->integer('eduction_id');
            $table->integer('certificate_id');
            $table->string('portfolio_name');
            $table->string('portfolio_link');
            $table->string('user_profile_image');
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
        Schema::dropIfExists('user_details');
    }
}
