<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable(); 
            $table->string('release')->nullable();
            $table->string('artist')->nullable(); 
            $table->string('song')->nullable(); 
            $table->string('record_lable')->nullable();
            $table->string('territory')->nullable(); 
            $table->string('cover_art')->nullable(); 
            $table->string('song_url')->nullable();
            $table->string('release_date')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('songs');
    }
}
