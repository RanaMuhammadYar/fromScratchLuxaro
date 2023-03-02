<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChartersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charters', function (Blueprint $table) {
            $table->id();
            $table->string('charter_name');
            $table->string('charter_type');
            $table->string('rate');
            $table->string('description');
            $table->string('date_of_avalability');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('tags');
            $table->string('max_guests');
            $table->string('delivery_id');
            $table->string('terms_condition');
            $table->string('thumbnail_img');
            $table->string('charter_agreement');
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
        Schema::dropIfExists('charters');
    }
}
