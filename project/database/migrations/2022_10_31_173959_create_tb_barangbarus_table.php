<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_barangbarus', function (Blueprint $table) {
            $table->id('id_barang')->index();
            $table->date('tanggal_masuk');
            $table->integer('jumlah_barang');
            $table->timestamps();

            $table->foreign('id_barang')->references('id_barang')->on('tb_barangs')      
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_barangbarus');
    }
};
