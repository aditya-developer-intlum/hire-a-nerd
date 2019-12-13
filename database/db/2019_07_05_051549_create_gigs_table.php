<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGigsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gigs', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('user_id')->unsigned()->nullable();
			$table->string('gig_title')->nullable();
			$table->bigInteger('category')->unsigned()->nullable();
			$table->bigInteger('sub_category')->unsigned()->nullable();
			$table->string('tags')->nullable();
			$table->text('describe_your_gig')->nullable();
			$table->string('requirement', 450)->nullable();
			$table->string('answer_type', 200)->nullable();
			$table->boolean('is_mandatory')->nullable()->default(false);
			$table->string('gig_photo_one')->nullable();
			$table->string('gig_photo_two')->nullable();
			$table->string('gig_photo_three')->nullable();
			$table->string('gig_video')->nullable();
			$table->string('gig_pdf_one')->nullable();
			$table->string('gig_pdf_two')->nullable();
			$table->boolean('is_status')->nullable()->default(false)->comment('0 = Pending Approval, 1 = Approved, 2 = Blocked, 3 = Suspend');
			$table->text('region')->nullable();
			$table->date('suspended_till')->nullable();
			$table->boolean('status')->default(false)->comment('0="not posted yet",1="posted"');
			$table->integer('widget_one')->nullable();
			$table->integer('widget_two')->nullable();
			$table->integer('widget_three')->nullable();
			$table->integer('widget_four')->nullable();
			$table->integer('widget_five')->nullable();
			$table->timestamps();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('category')->references('id')->on('menu')->onDelete('cascade');
			$table->foreign('sub_category')->references('id')->on('sub_menu')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gigs');
	}

}
