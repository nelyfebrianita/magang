<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Http\Requests\BarangRequest;

class BarangController extends Controller
{
	public function index() {
		$barang = Barang::all();

        return view('barang.index', compact('barang'));
	}
    
	// public function edit(Barang $barang){
	// 	$barang = Barang::findOrFail($id);
	// 	return view('barang.edit', compact('barang'));
	// }

	// public function update($id, Request $request){
	// 	$barang = Barang::findOrFail($id);
	// 	$murid->update($request->all());
	// 	return redirect('barang');
	// }

	public function store(BarangRequest $request){
		$input =$request->all(); 
		$barang = Barang::create($input);

		return redirect('/barang');

	}

	public function create(){
	    return view('barang.create');

	}
	

	public function show($id){
		$halaman = 'barang';
		$Barang = Barang::findOrFail($id);
		return view ('barang.show', compact('halaman', 'barang'));
	}
}
