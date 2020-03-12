<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostRequestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('post_requests', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->text('description', 65535)->nullable();
			$table->bigInteger('category_id')->unsigned()->nullable()->index('post_requests_category_id_foreign');
			$table->bigInteger('sub_category_id')->unsigned()->nullable()->index('post_requests_sub_category_id_foreign');
			$table->string('deliver_time', 191)->nullable();
			$table->string('deliver_time_other', 191)->nullable();
			$table->string('budget', 191)->nullable();
			$table->string('attachment', 191)->nullable();
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
		Schema::drop('post_requests');
	}

}
