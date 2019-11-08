<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('orders', function (Blueprint $table) {
				$table->bigIncrements('id');
				$table->bigInteger('buyer_id')->unsigned()->nullable();
				$table->bigInteger('seller_id')->unsigned()->default(null)->nullable();
				$table->bigInteger('gig_id')->unsigned()->nullable();
				$table->enum('package', ['basic', 'standard', 'premium'])->nullable();
				$table->boolean('is_completed')->default(false);
				$table->boolean('is_accepted')->default(false);
				$table->boolean('is_rejected')->default(false);
				$table->date('accepted_date')->nullable();
				$table->date('rejected_date')->nullable();
				$table->timestamps();
				$table->foreign('buyer_id')->references('id')->on('users')->onDelete('cascade');
				$table->foreign('seller_id')->references('id')->on('users')->onDelete('cascade');
				$table->foreign('gig_id')->references('id')->on('gigs')->onDelete('cascade');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('orders');
	}
}
