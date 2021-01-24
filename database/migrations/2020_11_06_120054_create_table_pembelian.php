<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePembelian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbpembelian', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_pembelian',20)->unique();
            $table->string('id_barang',20);
            $table->string('id_admin',20);
            $table->string('id_vendor',20);
            $table->string('Total_HargaBeli',50);
            $table->string('Jumlah_Barang',100);
            $table->date('Tanggal_beli');

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
        Schema::dropIfExists('tbpembelian');
    }
}
