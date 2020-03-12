<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCommisionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('commisions', function(Blueprint $table)
		{
			$table->foreign('menu_id')->references('id')->on('menu')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('sub_menu_id')->references('id')->on('sub_menu')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('user_id')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('commisions', function(Blueprint $table)
		{
			$table->dropForeign('commisions_menu_id_foreign');
			$table->dropForeign('commisions_sub_menu_id_foreign');
			$table->dropForeign('commisions_user_id_foreign');
		});
	}

}
