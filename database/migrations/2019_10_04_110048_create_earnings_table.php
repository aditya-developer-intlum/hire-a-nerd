<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEarningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('earnings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('seller_id')->unsigned()->default(null)->nullable();
            $table->bigInteger('buyer_id')->unsigned()->default(null)->nullable();
            $table->bigInteger('gig_id')->unsigned()->default(null)->nullable();
            $table->decimal('amount', 10, 2)->unsigned()->default(null)->nullable();
            $table->string('mode')->default('credited')->nullable();
            $table->longText('region')->default(null)->nullable();
            $table->timestamps();
        });
        Schema::create('admin_earnings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('admin_id')->unsigned()->default(null)->nullable();
            $table->bigInteger('seller_id')->unsigned()->default(null)->nullable();
            $table->bigInteger('gig_id')->unsigned()->default(null)->nullable();
            $table->decimal('amount', 10, 2)->unsigned()->default(null)->nullable();
            $table->string('mode')->default('credited')->nullable();
            $table->longText('region')->default(null)->nullable();
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
        Schema::dropIfExists('earnings');
    }
}
