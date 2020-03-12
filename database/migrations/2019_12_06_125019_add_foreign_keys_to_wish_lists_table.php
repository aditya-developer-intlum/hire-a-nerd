<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWishListsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('wish_lists', function(Blueprint $table)
		{
			$table->foreign('gig_id', 'wish_lists_ibfk_1')->references('id')->on('gigs')->onUpdate('NO ACTION')->onDelete('CASCADE');
			$table->foreign('user_id', 'wish_lists_ibfk_2')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('wish_lists', function(Blueprint $table)
		{
			$table->dropForeign('wish_lists_ibfk_1');
			$table->dropForeign('wish_lists_ibfk_2');
		});
	}

}
