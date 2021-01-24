<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PelangganRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

            'id_pelanggan' => 'required',
            'nama_pelanggan' => 'required',
             'telepon_pelanggan' => 'required',
             'alamat_pelanggan' => 'required',
             'email' => 'required',
             'kota' => 'required',
             'status' => 'required'
            
        ];
    }
}

