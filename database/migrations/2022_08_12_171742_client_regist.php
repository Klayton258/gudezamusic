<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_regists', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('event');
            $table->unsignedBigInteger('client');
            $table->unsignedBigInteger('payment');
            $table->boolean('hasPayment')->default(false);
            $table->text('ticket')->nullable();
            $table->boolean('validated')->default(false);
            $table->string('descountCode')->nullable();
            $table->foreign('event')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('client')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('payment')->references('id')->on('payments')->onDelete('cascade');
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
        //
    }
};
