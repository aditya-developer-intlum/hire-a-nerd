<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->ipAddress('visitor')->nullable();
            $table->string('type')->default(null)->nullable();
            $table->string('continent_code')->default(null)->nullable();
            $table->string('continent_name')->default(null)->nullable();
            $table->string('country_code')->default(null)->nullable();
            $table->string('country_name')->default(null)->nullable();
            $table->string('region_code')->default(null)->nullable();
            $table->string('region_name')->default(null)->nullable();
            $table->string('city')->default(null)->nullable();
            $table->string('zip')->default(null)->nullable();
            $table->string('latitude')->default(null)->nullable();
            $table->string('longitude')->default(null)->nullable();
            $table->string('geo_id')->default(null)->nullable();
            $table->string('capital')->default(null)->nullable();
            $table->string('lang_code')->default(null)->nullable();
            $table->string('lang_name')->default(null)->nullable();
            $table->string('lang_native')->default(null)->nullable();
            $table->string('country_flag')->default(null)->nullable();
            $table->string('country_flag_emoji')->default(null)->nullable();
            $table->string('calling_code')->default(null)->nullable();
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
        Schema::dropIfExists('user_locations');
    }
}
