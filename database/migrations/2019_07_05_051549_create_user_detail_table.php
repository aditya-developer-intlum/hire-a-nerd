<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_detail', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('user_id')->unsigned()->nullable();
			$table->string('sort_story', 500)->nullable();
			$table->string('country', 500)->nullable();
			$table->string('description', 1000)->nullable();
			$table->string('avatar', 500)->nullable();
			$table->text('notification_email')->nullable();
			$table->text('notification_mobile')->nullable();
			$table->timestamps();
			$table->foreign('user_id')->references('users')->on('users')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_detail');
	}

}
