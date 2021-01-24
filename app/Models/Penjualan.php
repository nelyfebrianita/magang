<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'tbpenjualan';
    protected $fillable = ['id_penjualan', 'id_barang', 'email_admin', 'id_pelanggan', 'Total_HargaJual', 'Jumlah_Barang', 'Tanggal_jual'];
}

