<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEarningsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('earnings', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('seller_id')->unsigned()->nullable();
			$table->bigInteger('buyer_id')->unsigned()->nullable();
			$table->bigInteger('gig_id')->unsigned()->nullable();
			$table->decimal('amount', 10)->unsigned()->nullable();
			$table->string('mode', 191)->nullable()->default('credited');
			$table->text('region')->nullable();
			$table->bigInteger('order_id')->unsigned()->nullable()->index('order_id');
			$table->boolean('is_withdraw_able')->nullable()->default(0);
			$table->string('slug', 191)->nullable();
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
		Schema::drop('earnings');
	}

}
