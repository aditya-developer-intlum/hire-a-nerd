<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminEarningsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin_earnings', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('admin_id')->unsigned()->nullable();
			$table->bigInteger('seller_id')->unsigned()->nullable();
			$table->bigInteger('gig_id')->unsigned()->nullable();
			$table->decimal('amount', 10)->unsigned()->nullable();
			$table->string('mode', 191)->nullable()->default('credited');
			$table->text('region')->nullable();
			$table->bigInteger('order_id')->unsigned()->nullable()->index('order_id');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admin_earnings');
	}

}
