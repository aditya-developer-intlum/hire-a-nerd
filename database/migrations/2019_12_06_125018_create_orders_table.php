<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('buyer_id')->unsigned()->nullable()->index('orders_buyer_id_foreign');
			$table->bigInteger('seller_id')->nullable();
			$table->bigInteger('gig_id')->unsigned()->nullable()->index('orders_gig_id_foreign');
			$table->enum('package', array('basic','standard','premium'))->nullable();
			$table->bigInteger('price')->nullable();
			$table->bigInteger('total_price')->nullable();
			$table->boolean('is_completed')->default(0);
			$table->boolean('is_accepted')->default(0);
			$table->boolean('is_late')->nullable()->default(0);
			$table->boolean('is_delivered')->nullable()->default(0);
			$table->boolean('is_cancelled')->nullable()->default(0)->comment('cancel by seller');
			$table->boolean('is_rejected')->default(0)->comment('cancel by buyer');
			$table->date('accepted_at')->nullable();
			$table->date('rejected_at')->nullable();
			$table->dateTime('completed_at')->nullable();
			$table->dateTime('delivered_at')->nullable();
			$table->timestamps();
			$table->dateTime('due_date')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}

}
