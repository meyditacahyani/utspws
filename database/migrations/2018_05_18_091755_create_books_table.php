<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Buku',function (Blueprint $table){
            $table->increments('id_buku');
            $table->string('nama_buku');
            $table->string('penulis');
            $table->string('latar_belakang');
            $table->string('tahun_buku');
            $table->string('penerbit');
            $table->string('harga_buku');
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
        //
    }
}
