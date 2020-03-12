<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGigFaqsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('gig_faqs', function(Blueprint $table)
		{
			$table->foreign('gig_id')->references('id')->on('gigs')->onUpdate('NO ACTION')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('gig_faqs', function(Blueprint $table)
		{
			$table->dropForeign('gig_faqs_gig_id_foreign');
		});
	}

}
