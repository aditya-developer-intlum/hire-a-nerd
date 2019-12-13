<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAdminEarningsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('admin_earnings', function(Blueprint $table)
		{
			$table->foreign('order_id', 'admin_earnings_ibfk_1')->references('id')->on('orders')->onUpdate('NO ACTION')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('admin_earnings', function(Blueprint $table)
		{
			$table->dropForeign('admin_earnings_ibfk_1');
		});
	}

}
