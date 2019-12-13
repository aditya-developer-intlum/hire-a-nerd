<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_locations', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('user_id')->unsigned()->nullable();
			$table->string('visitor', 191)->nullable();
			$table->string('type', 191)->nullable();
			$table->string('continent_code', 191)->nullable();
			$table->string('continent_name', 191)->nullable();
			$table->string('country_code', 191)->nullable();
			$table->string('country_name', 191)->nullable();
			$table->string('region_code', 191)->nullable();
			$table->string('region_name', 191)->nullable();
			$table->string('city', 191)->nullable();
			$table->string('zip', 191)->nullable();
			$table->string('latitude', 191)->nullable();
			$table->string('longitude', 191)->nullable();
			$table->string('geo_id', 191)->nullable();
			$table->string('capital', 191)->nullable();
			$table->string('lang_code', 191)->nullable();
			$table->string('lang_name', 191)->nullable();
			$table->text('lang_native', 65535)->nullable();
			$table->text('country_flag', 65535)->nullable();
			$table->string('country_flag_emoji', 191)->nullable();
			$table->string('calling_code', 191)->nullable();
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
		Schema::drop('user_locations');
	}

}
