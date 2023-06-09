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
        Schema::create('tb_members', function (Blueprint $table) {
            $table->string('id_member',50);
            $table->string('username')->index();
            $table->string('password',50);
            $table->string('pendidikan_member',50);
            $table->string('email_member',50);
            $table->string('foto',100);
            $table->string('no_hp',50);
            $table->string('jabatan_member',50);
            $table->string('alamat_member',50);
            $table->string('status',50);
            $table->timestamps();

            $table->foreign('username')->references('username')->on('users')      
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
        Schema::dropIfExists('tb_members');
    }
};
