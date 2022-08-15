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
        Schema::create('leads', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('birthday');
            $table->string('phone');
            $table->string('gener');
            $table->string('nacionality');
            $table->string('residence');
            $table->string('civilstate');
            $table->string('ocupation');
            $table->string('favorite_music_gener');
            $table->string('favorite_social_media');
            $table->string('favorite_digital_portal');
            $table->string('favorite_activity');
            $table->string('degree_level');
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
