<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('name')->nullable();
			$table->string('f_name')->nullable();
			$table->string('l_name')->nullable();
			$table->string('email')->unique();
			$table->string('mobile_number')->nullable();
			$table->dateTime('email_verified_at')->nullable();
			$table->string('password');
			$table->boolean('term_and_condition');
			$table->boolean('status')->default(0)->comment('0=deactive,1=active,2=suspend');
			$table->integer('online_status')->comment('0="offline",1="Online",2="ideal",3="hidden"');
			$table->string('remember_token', 100)->nullable();
			$table->string('deative_reasion');
			$table->timestamps();
			$table->string('token',255)->nullable();
			$table->enum('mode',[1,2])->nullable()->comment('1 = Buyers , 2 = Sellers');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
