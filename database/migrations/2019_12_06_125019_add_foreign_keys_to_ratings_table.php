<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRatingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ratings', function(Blueprint $table)
		{
			$table->foreign('gig_id', 'ratings_ibfk_1')->references('id')->on('gigs')->onUpdate('NO ACTION')->onDelete('CASCADE');
			$table->foreign('user_id', 'ratings_ibfk_2')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ratings', function(Blueprint $table)
		{
			$table->dropForeign('ratings_ibfk_1');
			$table->dropForeign('ratings_ibfk_2');
		});
	}

}
