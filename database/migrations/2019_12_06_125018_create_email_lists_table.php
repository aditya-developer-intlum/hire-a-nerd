<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailListsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('email_lists', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('email', 191)->nullable();
			$table->bigInteger('user_id')->unsigned()->nullable()->index('email_lists_user_id_foreign');
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
		Schema::drop('email_lists');
	}

}
