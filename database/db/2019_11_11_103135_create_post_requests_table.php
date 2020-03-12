<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('description')->default(null)->nullable();
            $table->bigInteger('category_id')->unsigned()->default(null)->nullable();
            $table->bigInteger('sub_category_id')->unsigned()->default(null)->nullable();
            $table->string('deliver_time')->default(null)->nullable();
            $table->string('deliver_time_other')->default(null)->nullable();
            $table->string('budget')->default(null)->nullable();
            $table->string('attachment')->default(null)->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('menu')->onDelete('cascade');
            $table->foreign('sub_category_id')->references('id')->on('sub_menu')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_requests');
    }
}
