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
        // Schema::create('payments',function(Blueprint $table){
        //     $table->id();
        //     $table->string('method')->nullable();
        //     $table->unsignedBigInteger('client');
        //     $table->string('reference')->nullable();
        //     $table->float('amount')->nullable();
        //     $table->enum('state',['FREE','UNPAYED','PAYED','DESCOUNTED'])->nullable();
        //     $table->foreign('client')->references('id')->on('clients')->onDelete('cascade');
        //     $table->timestamps();
        //     $table->softDeletes();
        // });
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
