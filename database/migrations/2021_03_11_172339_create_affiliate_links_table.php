<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffiliateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliate_links', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('affiliate_id')->unsigned()->nullable();
            $table->integer('service_id')->unsigned()->nullable();
            $table->string('generated_link', 255)->nullable();
            $table->bigInteger('total_clicks')->unsigned()->nullable();
            $table->bigInteger('total_purchase')->unsigned()->nullable();
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
        Schema::dropIfExists('affiliate_links');
    }
}
