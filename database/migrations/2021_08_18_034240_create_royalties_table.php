<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoyaltiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('royalties', function (Blueprint $table) {
            $table->id();
            
            $table->string('username')->nullable(); 
            $table->string('release_name')->nullable();
            $table->string('song_name')->nullable();
            $table->string('applemusic_streams')->nullable(); 
            $table->string('amazonmusic_streams')->nullable(); 
            $table->string('deezer_streams')->nullable();
            $table->string('spotify_streams')->nullable();
            $table->string('tidal_streams')->nullable();
            $table->string('youtube_streams')->nullable();
            $table->string('total_streams')->nullable(); 
            $table->string('downloads')->nullable();
            $table->string('revenue')->nullable(); 
            $table->string('period_gained')->nullable();
            $table->string('image_file')->nullable();

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
        Schema::dropIfExists('royalties');
    }
}
