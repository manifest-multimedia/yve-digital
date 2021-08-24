<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_users', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
            $table->string('username')->nullable();
            $table->string('cust_phone')->nullable(); 
            $table->string('pass')->nullable();
            $table->string('privilege')->nullable(); 
            $table->string('online_stat')->nullable();
            $table->string('active_stat')->nullable();
            $table->string('trans_time')->nullable();
            $table->string('trans_date')->nullable(); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_users');
    }
}
