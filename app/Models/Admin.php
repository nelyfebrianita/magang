<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'tbadmin';

    protected $fillable = ['email_admin'];

    public function penjualan(){
    	return $this->hasMany('App\Pembelian','email_admin');
    }

}