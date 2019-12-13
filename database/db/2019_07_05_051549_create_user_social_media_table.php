<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserSocialMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_social_media', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('user_id')->unsigned()->nullable();
			$table->bigInteger('linked_account_id')->unsigned()->nullable();
			$table->string('nick_name')->nullable();
			$table->string('name')->nullable();
			$table->string('email')->nullable();
			$table->string('avatar', 500)->nullable();
			$table->timestamps();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
			$table->foreign('linked_account_id')->references('id')->on('linked_accounts')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_social_media');
	}

}
