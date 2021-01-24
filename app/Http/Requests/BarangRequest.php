<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarangRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id_barang' => 'required',
            'id_kategori' => 'required',
             'id_satuan' => 'required',
             'nama_barang' => 'required',
             'brand_barang' => 'required',
             'stok_barang' => 'required',
             'harga_barang' => 'required',
             'harga_jual' => 'required',
             'harga_beli' => 'required'
        ];
    }
}

