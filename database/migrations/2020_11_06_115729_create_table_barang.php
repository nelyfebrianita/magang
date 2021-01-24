<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbbarang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_barang',20)->unique();
            $table->string('id_kategori',20);
            $table->string('id_satuan',20);
            $table->string('nama_barang',100);
            $table->string('brand_barang',100);
            $table->string('stok_barang',100);
            $table->string('harga_barang',50);
            $table->string('harga_jual',50);
            $table->string('harga_beli',50);
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
        Schema::dropIfExists('tbbarang');
    }
}
