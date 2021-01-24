@extends('template')

@section('main')
<div id="pelanggan">
<h2>Tambah Pelanggan</h2>
<table class="table table-striped">

<tr>
<th>Id Pelanggan</th>
<td>{{ $pelanggan->id_pelanggan }}</td>
</tr>

<tr>
<th>Nama Pelanggan</th>
<td>{{ $pelanggan->nama_pelanggan }}</td>
</tr>

<tr>
<th>Telepon Pelanggan</th>
<td>{{ $pelanggan->telepon_pelanggan }}</td>
</tr>

<tr>
<th>Alamat Pelanggan</th>
<td>{{ $pelanggan->alamat-pelanggan }}</td>
</tr>

<tr>
<th>Email</th>
<td>{{ $pelanggan->email }}</td>
</tr>

<tr>
<th>Kota</th>
<td>{{ $pelanggan->kota}}</td>
</tr>

<tr>
<th>Status</th>
<td>{{ $pelanggan->status }}</td>
</tr>

</table>
</div>

@stop

@section('footer')
	@include('footer')
@stop
