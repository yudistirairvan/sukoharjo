<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('IdUser');
            $table->integer('IdAkun');
            $table->integer('IdPembukuan');
            $table->string('Tanggal');
            $table->string('Jam');
            $table->integer('Story');
            $table->integer('Feed');
            $table->integer('Ket');
            $table->timestamps();
            // $table->unsignedBigInteger('IdUser');
            // $table->foreign('IdUser')->references('id')->on('mimins');
            // // $table->unsignedBigInteger('IdAkun');
            // $table->foreign('IdAkun')->references('id')->on('akuns');
            // // $table->unsignedBigInteger('IdPembukuan');
            // $table->foreign('IdPembukuan')->references('id')->on('pembukuans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwals');
    }
}
