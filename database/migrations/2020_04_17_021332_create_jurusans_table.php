<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurusansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurusans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_jurusan',3)->unique();
            //kode jurusan berjumlah 3 huruf, misal EKW, TEK, KIM, TIB
            $table->string('nama_jurusan', 50);
            //nama jurusan berjumlah maksimal 50 karakter
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
        Schema::dropIfExists('jurusans');
    }
}