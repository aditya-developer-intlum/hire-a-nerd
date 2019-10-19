<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('seller_id')->unsigned()->nullable()->comment('Payment Reciver Id');
            $table->bigInteger('buyer_id')->unsigned()->nullable()->comment('Payment Sender Id');
            $table->bigInteger('gig_id')->unsigned()->nullable();
            $table->decimal('amount', 8, 2)->nullable();
            $table->enum('ledger',['dr','cr'])->nullable()->comment('DR,CR');
            $table->string('slug')->nullable()->comment('Detail about Transacation');
            $table->timestamps();
            $table->foreign('seller_id')->references('id')->on('users')->onDelete(null);
            $table->foreign('buyer_id')->references('id')->on('users')->onDelete(null);
            $table->foreign('gig_id')->references('id')->on('gigs')->onDelete(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
