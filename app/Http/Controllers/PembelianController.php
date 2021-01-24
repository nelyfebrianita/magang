<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Http\Requests\PembelianRequest;

class PembelianController extends Controller
{
    public function index() {
    	$pembelian = Pembelian::all();

    	return view('pembelian.index', compact('pembelian'));
    }

    public function update(Pembelian $pembelian, Request $request){
		$input = $Request->all();
	}

	public function create(){
	    return view('pembelian.create');

	}

    public function store(PembelianRequest $request){
		$input =$request->all(); 
		$pembelian = Pembelian::create($input);

		return redirect('/pembelian');

	}
	

	public function show($id){
		$halaman = 'pembelian';
		$pembelian = Pembelian::findOrFail($id);
		return view ('pembelian.show', compact('halaman', 'pembelian'));

	}

}

