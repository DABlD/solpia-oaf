<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBackgroundChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('background_checks', function (Blueprint $table) {
            $table->id();

            $table->integer('crew_id')->unsigned();

            $table->string('manning_agent')->nullable();
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->string('contact')->nullable();

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
        Schema::dropIfExists('background_checks');
    }
}
