<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeaServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sea_services', function (Blueprint $table) {
            $table->id();

            $table->integer('crew_id')->unsigned();

            $table->string('vessel_name')->nullable();
            $table->string('vessel_type')->nullable();
            $table->string('rank')->nullable();
            $table->string('gross_tonnage')->nullable();
            $table->string('flag')->nullable();
            $table->string('bhp_kw')->nullable();
            $table->string('trade')->nullable();
            $table->string('previous_salary')->nullable();
            $table->string('manning_agent')->nullable();
            $table->string('principal')->nullable();
            $table->string('crew_nationality')->nullable();
            $table->date('sign_on')->nullable();
            $table->date('sign_off')->nullable();
            $table->text('remarks')->nullable();

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
        Schema::dropIfExists('sea_services');
    }
}
