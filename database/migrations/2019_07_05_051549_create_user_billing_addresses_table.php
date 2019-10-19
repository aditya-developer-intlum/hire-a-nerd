<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserBillingAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_billing_addresses', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('user_id');
			$table->string('company_name', 500)->nullable();
			$table->string('full_name', 500)->nullable();
			$table->string('country_id', 200)->nullable();
			$table->string('address', 500)->nullable();
			$table->string('city_id', 200)->nullable();
			$table->integer('zip_code')->nullable();
			$table->boolean('is_invoice')->nullable();
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
		Schema::drop('user_billing_addresses');
	}

}
