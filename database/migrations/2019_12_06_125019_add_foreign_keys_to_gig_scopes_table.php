<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGigScopesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('gig_scopes', function(Blueprint $table)
		{
			$table->foreign('gig_price_id')->references('id')->on('gig_prices')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('gig_scopes', function(Blueprint $table)
		{
			$table->dropForeign('gig_scopes_gig_price_id_foreign');
		});
	}

}
