<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sub_menu', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('menu_id');
			$table->string('name');
			$table->string('slug');
			$table->boolean('is_active')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sub_menu');
	}

}
