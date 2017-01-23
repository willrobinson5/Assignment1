<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     //Creates the columns in the artists table
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('DOB');
            $table->string('nationality');
            $table->String('about');
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
        Schema::dropIfExists('artist');
    }
}
