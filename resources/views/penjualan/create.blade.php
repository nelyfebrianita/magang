@extends ('template_backend.home')
@section ('judul', 'Tambah Penjualan')
@section ('content')
	<div id="Daftar Penjualan">
		{!! Form::open(['url'=>'penjualan', 'files' => true]) !!}
		@include('penjualan.form', ['submitButtonText' => 'Simpan'])
		{!! Form::close() !!}
	</div>

@stop