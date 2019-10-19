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
			$table->bigIncrements('id');
			$table->bigInteger('gig_id')->unsigned()->nullable();
			$table->string('basic_package_name')->nullable();
			$table->string('standard_package_name')->nullable();
			$table->string('premium_package_name')->nullable();
			$table->string('basic_description')->nullable();
			$table->string('standard_description')->nullable();
			$table->string('premium_description')->nullable();
			$table->string('basic_delivery_time', 50)->nullable();
			$table->string('standard_delivery_time', 50)->nullable();
			$table->string('premium_delivery_time', 50)->nullable();
			$table->decimal('basic_price', 10)->nullable();
			$table->decimal('standard_price', 10)->nullable();
			$table->decimal('premium_price', 10)->nullable();
			$table->boolean('status')->nullable()->default(false);
			$table->foreign('gig_id')->references('id')->on('gigs')->onDelete('cascade');
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
