<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosaKerusakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosa_kerusakan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_jeniskerusakan')->references('id')->on('jenis_kerusakan');
            $table->foreignId('id_kerusakan')->references('id')->on('kerusakan');
            $table->text('keterangan');
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
        Schema::dropIfExists('diagnosa_kerusakan');
    }
}
