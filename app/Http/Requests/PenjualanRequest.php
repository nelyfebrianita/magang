<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenjualanRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

            'id_penjualan' => 'required',
            'id_barang' => 'required',
             'email_admin' => 'required',
             'id_pelanggan' => 'required',
             'Total_HargaJual' => 'required',
             'Jumlah_Barang' => 'required',
             'Tanggal_jual'=>'required|date'
            
        ];
    }
}
