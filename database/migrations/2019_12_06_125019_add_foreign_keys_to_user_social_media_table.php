<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserSocialMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_social_media', function(Blueprint $table)
		{
			$table->foreign('linked_account_id')->references('id')->on('linked_accounts')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('user_id')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_social_media', function(Blueprint $table)
		{
			$table->dropForeign('user_social_media_linked_account_id_foreign');
			$table->dropForeign('user_social_media_user_id_foreign');
		});
	}

}
