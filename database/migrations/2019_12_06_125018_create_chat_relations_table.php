<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChatRelationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chat_relations', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('sender_id')->unsigned()->nullable()->index('chat_relations_sender_id_foreign');
			$table->bigInteger('receiver_id')->unsigned()->nullable()->index('chat_relations_receiver_id_foreign');
			$table->dateTime('last_login')->nullable();
			$table->boolean('is_online')->nullable();
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
		Schema::drop('chat_relations');
	}

}
