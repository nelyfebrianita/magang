<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Http\Requests\PenjualanRequest;

class PenjualanController extends Controller
{
     public function index() {
    	$penjualan = Penjualan::all();

    	return view('penjualan.index', compact('penjualan'));
    }


	public function edit(Penjualan $penjualan){
		return view('penjualan.edit', compact('penjualan'));
	}

	public function update(Penjualan $penjualan, Request $request){
		$input = $Request->all();
	}

	public function store(PenjualanRequest $request){
		$input =$request->all(); 
		$penjualan = Penjualan::create($input);

		return redirect('/penjualan');

	}

	public function create(){
	    return view('penjualan.create');

	}

	public function show($id){
		$halaman = 'penjualan';
		$penjualan = Penjualan::findOrFail($id);
		return view ('penjualan.show', compact('halaman', 'penjualan'));
	}

}

