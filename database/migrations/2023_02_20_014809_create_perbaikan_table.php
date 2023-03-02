<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerbaikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perbaikan', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal');
            $table->enum('status_perbaikan',['pencarian','proses','selesai']);
            $table->enum('status_pembayaran',['belum','sudah']);
            $table->foreignId('id_mekanik')->references('id')->on('mekanik');
            $table->foreignId('id_kerusakan')->references('id')->on('kerusakan');
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
        Schema::dropIfExists('perbaikan');
    }
}
