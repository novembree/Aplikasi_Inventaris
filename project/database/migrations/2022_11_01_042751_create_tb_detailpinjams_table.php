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
        Schema::create('tb_detailpinjams', function (Blueprint $table) {
            $table->id('id_pinjam');
            $table->integer('id_barang');
            $table->integer('jumlah');
            $table->timestamps();

            // $table->foreign('id_pinjam')->references('id_pinjam')->on('tb_barangs')      
            // ->onUpdate('cascade')
            // ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_detailpinjams');
    }
};
