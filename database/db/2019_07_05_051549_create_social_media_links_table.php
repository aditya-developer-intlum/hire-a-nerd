<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSocialMediaLinksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('social_media_links', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('name')->nullable();
			$table->string('icon')->nullable();
			$table->string('links')->nullable();
			$table->integer('sort')->nullable();
			$table->boolean('is_active')->default(true);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('social_media_links');
	}

}
