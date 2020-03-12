<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlockedUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blocked_users', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('visitors', 45)->nullable();
			$table->boolean('is_blocked')->nullable();
			$table->integer('blocked_duration')->nullable()->comment('in second');
			$table->integer('total_attempt');
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
		Schema::drop('blocked_users');
	}

}
