<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Perpustakaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('perpustakaan', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nbi', 10);
            $table->string('nama_mhs', 30);
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
        schema::dropIfExists('perpustakaan');
    }
}
