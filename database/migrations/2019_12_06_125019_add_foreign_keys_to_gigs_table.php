<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGigsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('gigs', function(Blueprint $table)
		{
			$table->foreign('category')->references('id')->on('menu')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('sub_category')->references('id')->on('sub_menu')->onUpdate('RESTRICT')->onDelete('CASCADE');
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
		Schema::table('gigs', function(Blueprint $table)
		{
			$table->dropForeign('gigs_category_foreign');
			$table->dropForeign('gigs_sub_category_foreign');
			$table->dropForeign('gigs_user_id_foreign');
		});
	}

}
