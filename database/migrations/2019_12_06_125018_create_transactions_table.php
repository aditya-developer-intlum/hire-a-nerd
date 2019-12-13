<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactions', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('seller_id')->unsigned()->nullable()->index('transactions_seller_id_foreign')->comment('Payment Reciver Id');
			$table->bigInteger('buyer_id')->unsigned()->nullable()->index('transactions_buyer_id_foreign')->comment('Payment Sender Id');
			$table->integer('gig_id')->nullable();
			$table->integer('order_id')->nullable();
			$table->decimal('amount')->nullable();
			$table->enum('ledger', array('dr','cr'))->nullable()->comment('DR,CR');
			$table->string('slug', 191)->nullable()->comment('Detail about Transacation');
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
		Schema::drop('transactions');
	}

}
