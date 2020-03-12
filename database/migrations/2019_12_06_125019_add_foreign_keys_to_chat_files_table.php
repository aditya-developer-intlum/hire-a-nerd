<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToChatFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('chat_files', function(Blueprint $table)
		{
			$table->foreign('chat_id')->references('id')->on('chats')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('chat_files', function(Blueprint $table)
		{
			$table->dropForeign('chat_files_chat_id_foreign');
		});
	}

}
