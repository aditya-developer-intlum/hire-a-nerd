<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScopeListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scope_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('menu_id')->unsigned()->nullable()->default(null);
            $table->bigInteger('sub_menu_id')->unsigned()->nullable()->default(null);
            $table->bigInteger('scope_id')->unsigned()->nullable()->default(null);
            $table->timestamps();
            $table->foreign('menu_id')->references('id')->on('menu')->onDelete('CASCADE');
            $table->foreign('sub_menu_id')->references('id')->on('sub_menu')->onDelete('CASCADE');
            $table->foreign('scope_id')->references('id')->on('scopes')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scope_lists');
    }
}
