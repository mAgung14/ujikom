<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPerbaikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_perbaikan', function (Blueprint $table) {
            $table->id();
            $table->string('jenisperbaikan');
            $table->string('nominal');
            $table->text('keterangan');
            $table->foreignId('id_perbaikan')->references('id')->on('perbaikan');
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
        Schema::dropIfExists('detail_perbaikan');
    }
}
