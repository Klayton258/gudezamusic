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
        Schema::create('descounts',function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('payment');
            $table->unsignedBigInteger('client');
            $table->integer('code');
            $table->integer('percent');
            $table->foreign('payment')->references('id')->on('payments')->onDelete('cascade');
            $table->foreign('client')->references('id')->on('clients')->onDelete('cascade');
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
