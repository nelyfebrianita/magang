<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $table = 'tbpembelian';
    protected $fillable = ['id_pembelian', 'id_barang', 'email_admin', 'id_vendor', 'Jumlah_Barang', 'Total_HargaBeli', 'Tanggal_beli'];
}
