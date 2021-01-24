<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePenjualan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbpenjualan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_penjualan',20)->unique();
            $table->string('id_barang',20);
            $table->string('id_admin',20);
            $table->string('id_pelanggan',20);
            $table->string('Total_HargaJual',50);
            $table->string('Jumlah_Barang',100);
            $table->date('Tanggal_jual');

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
        Schema::dropIfExists('tbpenjualan');
    }
}
