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
        Schema::create('tb_barangs', function (Blueprint $table) {
            $table->id('id_barang');
            $table->string('nama_barang',50);
            $table->integer('jumlah_barang');
            $table->string('deskripsi_barang',100);
            $table->string('posisi_barang',50);
            $table->string('status_barang', 50);
            $table->string('foto_barang',100);
            $table->string('img_qrcode',100);
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
        Schema::dropIfExists('tb_barangs');
    }
};
