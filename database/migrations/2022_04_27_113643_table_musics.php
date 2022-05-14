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
        Schema::create('musics', function (Blueprint $table) {
            $table->id();
            $table->string('m_cover');
            $table->string('m_title');
            $table->string('m_artist');
            $table->string('m_album');
            $table->string('youtube')->nullable();
            $table->string('audiomack')->nullable();
            $table->string('spotify')->nullable();
            $table->string('soundcloud')->nullable();
            $table->softDeletes();
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
        //
    }
};
