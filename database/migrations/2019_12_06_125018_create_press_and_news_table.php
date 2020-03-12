<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePressAndNewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('press_and_news', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('picture', 191)->nullable();
			$table->string('title', 191)->nullable();
			$table->text('description', 65535)->nullable();
			$table->boolean('is_active')->default(1);
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
		Schema::drop('press_and_news');
	}

}
