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
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('user_id')->unsigned()->nullable()->index('gigs_user_id_foreign');
			$table->string('gig_title', 191)->nullable();
			$table->bigInteger('category')->unsigned()->nullable()->index('gigs_category_foreign');
			$table->bigInteger('sub_category')->unsigned()->nullable()->index('gigs_sub_category_foreign');
			$table->string('tags', 191)->nullable();
			$table->text('describe_your_gig', 65535)->nullable();
			$table->string('requirement', 450)->nullable();
			$table->string('answer_type', 200)->nullable();
			$table->boolean('is_mandatory')->nullable()->default(0);
			$table->string('gig_photo_one', 191)->nullable();
			$table->string('gig_photo_two', 191)->nullable();
			$table->string('gig_photo_three', 191)->nullable();
			$table->string('gig_video', 191)->nullable();
			$table->string('gig_pdf_one', 191)->nullable();
			$table->string('gig_pdf_two', 191)->nullable();
			$table->boolean('is_status')->nullable()->default(0)->comment('0 = Pending Approval, 1 = Approved, 2 = Blocked, 3 = Suspend, 4 = Modification');
			$table->text('region', 65535)->nullable();
			$table->date('suspended_till')->nullable();
			$table->boolean('status')->default(0)->comment('0="not posted yet",1="posted"');
			$table->integer('widget_one')->nullable();
			$table->integer('widget_two')->nullable();
			$table->integer('widget_three')->nullable();
			$table->integer('widget_four')->nullable();
			$table->integer('widget_five')->nullable();
			$table->bigInteger('clicks')->nullable();
			$table->timestamps();
			$table->softDeletes();
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
