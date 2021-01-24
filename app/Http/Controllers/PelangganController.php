<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Http\Requests\PelangganRequest;

class PelangganController extends Controller
{
	public function index() {
    	$pelanggan = Pelanggan::all();

    	return view('pelanggan.index', compact('pelanggan'));
    }

    public function update(Pelanggan $pelanggan, Request $request){
		$input = $Request->all();
	}

    public function store(PelangganRequest $request){
		$input =$request->all(); 
		$pelanggan = Pelanggan::create($input);

		return redirect('/pelanggan');

	}

	public function create(){
	    return view('pelanggan.create');

	}
	

	public function show($id){
		$halaman = 'pelanggan';
		$pelanggan = Pelanggan::findOrFail($id);
		return view ('pelanggan.show', compact('halaman', 'pelanggan'));
    }
}
