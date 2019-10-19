<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sender_id')->unsigned()->default(null)->nullable();
            $table->bigInteger('receiver_id')->unsigned()->default(null)->nullable();
            $table->longText('message')->default(null)->nullable();
            $table->boolean('is_seen')->default(false)->nullable();
            $table->timestamps();
            $table->foreign('sender_id')->references('id')->on('users')->onDelete(null);
            $table->foreign('receiver_id')->references('id')->on('users')->onDelete(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chats');
    }
}
