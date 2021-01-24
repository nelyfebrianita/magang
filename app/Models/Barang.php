<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'tbbarang';
    protected $fillable = ['id_barang', 'id_kategori', 'id_satuan', 'nama_barang', 'brand_barang', 'stok_barang', 'harga_barang', 'harga_jual', 'harga_beli'];
}
