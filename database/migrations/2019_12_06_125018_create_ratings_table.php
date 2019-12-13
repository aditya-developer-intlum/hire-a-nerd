<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRatingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ratings', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('user_id')->unsigned()->nullable()->index('user_id');
			$table->integer('stars')->nullable();
			$table->enum('type', array('Communication with seller','Service as Described','Buy Again or Recommend',''))->nullable();
			$table->bigInteger('gig_id')->unsigned()->nullable()->index('gig_id');
			$table->integer('seller_id')->unsigned()->nullable();
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
		Schema::drop('ratings');
	}

}
