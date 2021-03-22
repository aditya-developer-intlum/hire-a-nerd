<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffiliatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name',255)->nullable();
            $table->string('last_name',255)->nullable();
            $table->string('email', 255)->unique()->nullable();
            $table->string('password',255)->nullable();
            $table->string('phone_number', 255)->nullable();
            $table->string('skype_id', 255)->nullable();
            $table->string('country', 255)->nullable();
            $table->string('company_name', 255)->nullable();
            $table->string('website')->nullable();
            $table->string('additional_info', 1000)->nullable();
            $table->boolean('confirmed')->nullable();
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
        Schema::dropIfExists('affiliates');
    }
}
