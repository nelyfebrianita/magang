<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PembelianRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

            'id_pembelian' => 'required',
            'id_barang' => 'required',
             'email_admin' => 'required',
             'id_vendor' => 'required',
             'Jumlah_Barang' => 'required',
             'Total_HargaBeli' => 'required',
             'Tanggal_beli'=>'required|date'
            
        ];
    }
}

