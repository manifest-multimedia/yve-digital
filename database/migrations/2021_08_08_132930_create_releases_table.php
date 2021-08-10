<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReleasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('releases', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('release_name'); 
            $table->string('genre');
            $table->string('cover_art'); 
            $table->string('artist_name');
            $table->string('territory'); 
            $table->timestamp('releasedate'); 
            $table->string('record_label'); 
            $table->string('number_of_songs'); 
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
        Schema::dropIfExists('releases');
    }
}
