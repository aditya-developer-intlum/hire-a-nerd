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
			$table->bigIncrements('id');
			$table->bigInteger('gig_price_id')->unsigned()->nullable();
			$table->integer('basic')->nullable();
			$table->integer('standard')->nullable();
			$table->integer('premium')->nullable();
			$table->foreign('gig_price_id')->references('id')->on('gig_prices')->onDelete('cascade');
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
