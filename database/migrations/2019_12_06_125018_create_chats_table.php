<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chats', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('sender_id')->unsigned()->nullable()->index('chats_sender_id_foreign');
			$table->bigInteger('receiver_id')->unsigned()->nullable()->index('chats_receiver_id_foreign');
			$table->text('message')->nullable();
			$table->text('file', 65535)->nullable();
			$table->text('url', 65535)->nullable();
			$table->boolean('is_seen')->nullable()->default(0);
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
		Schema::drop('chats');
	}

}
