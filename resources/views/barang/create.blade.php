@extends ('template_backend.home')
@section ('judul', 'Tambah Produk')
@section ('content')
	<div id="Daftar Produk">
		{!! Form::open(['url'=>'barang', 'files' => true]) !!}
		@include('barang.form', ['submitButtonText' => 'Simpan'])
		{!! Form::close() !!}
	</div>

@stop
