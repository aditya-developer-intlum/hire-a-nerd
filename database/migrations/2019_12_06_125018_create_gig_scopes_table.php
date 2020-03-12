<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGigScopesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gig_scopes', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('gig_price_id')->unsigned()->nullable()->index('gig_scopes_gig_price_id_foreign');
			$table->integer('basic')->nullable();
			$table->integer('standard')->nullable();
			$table->integer('premium')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gig_scopes');
	}

}
