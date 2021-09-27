<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFieldtypeForReleasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('releases', function (Blueprint $table) {
            $table->string('release_name')->nullable()->change(); 
            $table->string('genre')->nullable()->change(); 
            $table->string('cover_art')->nullable()->change(); 
            $table->string('artist_name')->nullable()->change(); 
            $table->string('territory')->nullable()->change(); 
            $table->string('record_label')->nullable()->change(); 
            $table->string('number_of_songs')->nullable()->change(); 
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
}
