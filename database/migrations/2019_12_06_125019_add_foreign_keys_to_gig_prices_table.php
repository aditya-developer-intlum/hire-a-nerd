<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGigPricesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('gig_prices', function(Blueprint $table)
		{
			$table->foreign('gig_id')->references('id')->on('gigs')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('gig_prices', function(Blueprint $table)
		{
			$table->dropForeign('gig_prices_gig_id_foreign');
		});
	}

}
