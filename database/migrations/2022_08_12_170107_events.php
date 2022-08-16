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
        Schema::create('events', function(Blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('location');
            $table->boolean('hasPrice');
            $table->float('Price');
            $table->integer('total_people');
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
