<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEarningsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('earnings', function(Blueprint $table)
		{
			$table->foreign('order_id', 'earnings_ibfk_1')->references('id')->on('orders')->onUpdate('NO ACTION')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('earnings', function(Blueprint $table)
		{
			$table->dropForeign('earnings_ibfk_1');
		});
	}

}
