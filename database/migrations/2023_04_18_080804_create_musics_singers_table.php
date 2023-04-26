<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicsSingersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musics_singers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('music_id')->unsigned();
            $table->unsignedBiginteger('singer_id')->unsigned();

            $table->foreign('music_id')->references('id')
                ->on('musics')->onDelete('cascade');
            $table->foreign('singer_id')->references('id')
                ->on('singers')->onDelete('cascade');

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
        Schema::dropIfExists('musics_singers');
    }
}
