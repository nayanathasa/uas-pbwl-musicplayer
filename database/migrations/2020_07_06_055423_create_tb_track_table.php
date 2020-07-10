<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTrackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_track', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name', 128);
            $table->integer('artist_id')->unsigned();
            $table->integer('album_id')->unsigned();
            $table->decimal('time', 5,2);
            $table->string('file');
            $table->timestamps();

            $table->foreign('artist_id')->references('id')->on('tb_artist')->onDelete('CASCADE');
            $table->foreign('album_id')->references('id')->on('tb_album')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_track');
    }
}
