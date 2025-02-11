<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crews', function (Blueprint $table) {
            $table->id();

            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('lname')->nullable();
            $table->string('birthday')->nullable();
            $table->string('address')->nullable();
            $table->string('contact')->nullable();

            $table->string('birth_place')->nullable();
            $table->string('religion')->nullable();
            $table->double('height', 5, 2)->nullable();
            $table->double('weight', 5, 2)->nullable();
            $table->string('blood_type')->nullable();
            $table->enum('civil_status', ['Single', 'Married', 'Widowed', 'Divorced'])->nullable();
            $table->string('provincial_address')->nullable();
            $table->string('provincial_contact')->nullable();
            $table->string('tin')->nullable();
            $table->string('sss')->nullable();
            $table->string('shoe_size')->nullable();
            $table->string('clothes_size')->nullable();
            $table->string('waistline')->nullable();

            $table->string('sid')->nullable();
            $table->string('ereg')->nullable();
            $table->string('parka')->nullable();

            $table->integer('rank_id')->unsigned()->nullable();
            $table->string('higher_license')->nullable();

            $table->boolean('synced')->default(false);
            $table->boolean('privacy_policy')->default(true);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user2s');
    }
}
