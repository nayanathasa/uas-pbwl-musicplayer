<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPlayedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_played', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('artist_id')->unsigned();
            $table->integer('album_id')->unsigned(); 
            $table->integer('track_id')->unsigned();
            $table->timestamps();

            $table->foreign('artist_id')->references('id')->on('tb_artist')->onDelete('CASCADE');
            $table->foreign('album_id')->references('id')->on('tb_album')->onDelete('CASCADE');
            $table->foreign('track_id')->references('id')->on('tb_track')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_played');
    }
}
