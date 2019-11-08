<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->default(null)->nullable(); 
            $table->bigInteger('user_id')->unsigned()->default(null)->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('email_lists');
    }
}
