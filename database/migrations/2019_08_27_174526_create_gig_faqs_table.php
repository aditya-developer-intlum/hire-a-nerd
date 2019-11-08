<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGigFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gig_faqs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('gig_id')->unsigned()->nullable();
            $table->string('question',300)->nullable();
            $table->text('answer')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('gig_faqs');
    }
}
