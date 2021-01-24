@extends ('template_backend.home')
@section ('judul', 'Tambah Pelanggan')
@section ('content')
	<div id="Daftar Pelanggan">
		{!! Form::open(['url'=>'pelanggan', 'files' => true]) !!}
		@include('pelanggan.form', ['submitButtonText' => 'Simpan'])
		{!! Form::close() !!}
	</div>

@stop
