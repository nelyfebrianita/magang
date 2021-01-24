@extends ('template_backend.home')
@section ('judul', 'Tambah Pembelian')
@section ('content')
	<div id="Daftar Pembelian">
		{!! Form::open(['url'=>'pembelian', 'files' => true]) !!}
		@include('pembelian.form', ['submitButtonText' => 'Simpan'])
		{!! Form::close() !!}
	</div>

@stop
