<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePelanggan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbpelanggan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_pelanggan',20)->unique();
            $table->string('nama_pelanggan',100);
            $table->string('telepon_pelanggan',20);
            $table->string('alamat_pelanggan',100);
            $table->string('email',50);
            $table->string('kota',50);
            $table->string('status',50);
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
        Schema::dropIfExists('tbpelanggan');
    }
}
