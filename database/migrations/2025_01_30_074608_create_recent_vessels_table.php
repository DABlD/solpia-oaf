<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecentVesselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recent_vessels', function (Blueprint $table) {
            $table->id();

            $table->integer('crew_id')->unsigned();

            $table->string('vessel_name')->nullable();
            $table->string('ship_manager')->nullable();
            $table->string('charterer')->nullable();

            $table->string('type_of_cargo')->nullable();
            $table->string('loading_port')->nullable();
            $table->string('discharging_port')->nullable();
            
            $table->string('main_engine')->nullable();
            $table->string('aux_engine')->nullable();
            $table->string('ballast_system')->nullable();

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
        Schema::dropIfExists('recent_vessels');
    }
}
