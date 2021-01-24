<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableVendor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbvendor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_vendor',20)->unique();
            $table->string('nama_vendor',100);
            $table->string('telepon_vendor',20);
            $table->string('alamat',100);
            $table->string('email',50);
            $table->string('kota',100);
            
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
        Schema::dropIfExists('tbvendor');
    }
}
