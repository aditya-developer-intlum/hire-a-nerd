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
			$table->bigInteger('id', true)->unsigned();
			$table->string('name');
			$table->string('f_name');
			$table->string('l_name');
			$table->string('email')->unique();
			$table->string('mobile_number', 13);
			$table->integer('type')->comment('0=\'users\',1=\'super_admin\',2=\'sub_admin\'');
			$table->dateTime('email_verified_at')->nullable();
			$table->string('password');
			$table->boolean('term_and_condition');
			$table->boolean('status')->default(0)->comment('0=deactive,1=active,2=suspend');
			$table->integer('online_status')->comment('0="offline",1="Online",2="ideal",3="hidden"');
			$table->string('remember_token', 100)->nullable();
			$table->string('deative_reasion');
			$table->timestamps();
			$table->string('token');
			$table->integer('mode')->nullable()->default(1)->comment('1 = Buyers Mode , 2 = Seller Mode');
			$table->float('address_latitude', 10, 0)->nullable();
			$table->float('address_longitude', 10, 0)->nullable();
			$table->dateTime('last_login')->nullable();
			$table->boolean('is_online')->nullable();
			$table->string('short_desc', 50)->nullable();
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
