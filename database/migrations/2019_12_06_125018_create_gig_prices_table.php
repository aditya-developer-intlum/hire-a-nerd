<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGigPricesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gig_prices', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('gig_id')->unsigned()->nullable()->index('gig_prices_gig_id_foreign');
			$table->string('basic_package_name', 191)->nullable();
			$table->string('standard_package_name', 191)->nullable();
			$table->string('premium_package_name', 191)->nullable();
			$table->string('basic_description', 191)->nullable();
			$table->string('standard_description', 191)->nullable();
			$table->string('premium_description', 191)->nullable();
			$table->string('basic_delivery_time', 50)->nullable();
			$table->string('standard_delivery_time', 50)->nullable();
			$table->string('premium_delivery_time', 50)->nullable();
			$table->decimal('basic_price', 10)->nullable();
			$table->decimal('standard_price', 10)->nullable();
			$table->decimal('premium_price', 10)->nullable();
			$table->boolean('status')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gig_prices');
	}

}
