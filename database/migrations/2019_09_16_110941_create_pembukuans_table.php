<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembukuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembukuans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('IdUser');
            $table->integer('IdAkun');
            $table->string('Tanggal');
            $table->string('Jenis');
            $table->string('Paket');
            $table->integer('Story');
            $table->integer('Feed');
            $table->string('Deskripsi');
            $table->string('Media');
            $table->string('Biaya');
            $table->string('Tag');
            $table->integer('Ket');
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
        Schema::dropIfExists('pembukuans');
    }
}
