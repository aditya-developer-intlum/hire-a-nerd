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
			$table->integer('id', true);
			$table->bigInteger('user_id')->unsigned()->nullable()->index('user_social_media_user_id_foreign');
			$table->bigInteger('linked_account_id')->unsigned()->nullable()->index('user_social_media_linked_account_id_foreign');
			$table->string('nick_name', 191)->nullable();
			$table->string('name', 191)->nullable();
			$table->string('email', 191)->nullable();
			$table->string('avatar', 500)->nullable();
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
		Schema::drop('user_social_media');
	}

}
