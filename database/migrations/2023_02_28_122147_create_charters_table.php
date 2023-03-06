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
            $table->string('charter_name')->nullable();
            $table->string('charter_type')->nullable();
            $table->string('rate')->nullable();
            $table->string('description')->nullable();
            $table->string('date_of_avalability')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('tags')->nullable();
            $table->string('max_guests')->nullable();
            $table->string('delivery_id')->nullable();
            $table->string('terms_condition')->nullable();
            $table->string('thumbnail_img')->nullable();
            $table->string('charter_agreement')->nullable();
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
