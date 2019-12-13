<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPostRequestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('post_requests', function(Blueprint $table)
		{
			$table->foreign('category_id')->references('id')->on('menu')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('sub_category_id')->references('id')->on('sub_menu')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('post_requests', function(Blueprint $table)
		{
			$table->dropForeign('post_requests_category_id_foreign');
			$table->dropForeign('post_requests_sub_category_id_foreign');
		});
	}

}
