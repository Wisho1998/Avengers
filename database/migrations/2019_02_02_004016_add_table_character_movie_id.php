<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableCharacterMovieId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('character', function (Blueprint $table) {
            $table->integer('movie_id')->unsigned()->after('points')->nullable();
            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('character', function (Blueprint $table) {
            //
        });
    }
}
