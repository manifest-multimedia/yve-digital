<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColumnsFromRoyaltiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('royalties', function (Blueprint $table) {
            
            $table->dropColumn('applemusic_streams');
            $table->dropColumn('amazonmusic_streams'); 
            $table->dropColumn('tidal_streams');
            $table->dropColumn('spotify_streams'); 
            $table->dropColumn('deezer_streams');
            $table->dropColumn('youtube_streams'); 
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('royalties', function (Blueprint $table) {
           
           
        });
    }
}
