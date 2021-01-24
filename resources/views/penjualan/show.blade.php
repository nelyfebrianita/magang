@extends('template')

@section('main')
<div id="pnjualan">
<h2>Tambah Penjualan</h2>
<table class="table table-striped">

<tr>
<th>Id Penjualan</th>
<td>{{ $penjualan->id_penjualan }}</td>
</tr>

<tr>
<th>Id Barang</th>
<td>{{ $penjualan->id_barang }}</td>
</tr>

<tr>
<th>Email Admin</th>
<td>{{ $penjualan->email_admin }}</td>
</tr>

<tr>
<th>Id Pelanggan</th>
<td>{{ $penjualan->id_pelanggan }}</td>
</tr>

<tr>
<th>Total Harga Jual</th>
<td>{{ $penjualan->Total_HargaJual }}</td>
</tr>

<tr>
<th>Jumlah Barang</th>
<td>{{ $penjualan->Jumlah_Barang}}</td>
</tr>

<tr>
<th>Tanggal Jual</th>
<td>{{ $penjualan->Tanggal_jual}}</td>
</tr>

</table>
</div>

@stop

@section('footer')
	@include('footer')
@stop
