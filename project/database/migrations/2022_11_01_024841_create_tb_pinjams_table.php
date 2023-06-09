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
        Schema::create('tb_pinjams', function (Blueprint $table) {
            $table->id('id_pinjam');
            $table->string('id_member',50);
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->string('status',50);
            $table->integer('conf');
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
        Schema::dropIfExists('tb_pinjams');
    }
};
