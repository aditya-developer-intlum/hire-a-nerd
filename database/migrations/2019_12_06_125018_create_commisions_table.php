<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommisionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('commisions', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('user_id')->unsigned()->nullable()->index('commisions_user_id_foreign');
			$table->bigInteger('menu_id')->unsigned()->nullable()->index('commisions_menu_id_foreign');
			$table->bigInteger('sub_menu_id')->unsigned()->nullable()->index('commisions_sub_menu_id_foreign');
			$table->bigInteger('amount')->nullable()->comment('Amount in Percentage');
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
		Schema::drop('commisions');
	}

}
