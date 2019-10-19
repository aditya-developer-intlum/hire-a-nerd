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
			$table->bigIncrements('id');
			$table->string('menu_id')->nullable();
			$table->string('name')->nullable();
			$table->string('slug')->nullable();
			$table->boolean('is_active')->nullable()->default(true);
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
