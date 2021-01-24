@extends('template')

@section('main')
<div id="pembelian">
<h2>Tambah Pembelian</h2>
<table class="table table-striped">

<tr>
<th>Id </th>
<td>{{ $pembelian->id }}</td>
</tr>

<tr>
<th>Id Pembelian</th>
<td>{{ $pembelian->id_pembelian }}</td>
</tr>

<tr>
<th>Id-Barang</th>
<td>{{ $pembelian->id_barang }}</td>
</tr>

<tr>
<th>Email Admin</th>
<td>{{ $pembelian->email_admin }}</td>
</tr>

<tr>
<th>Id Vendor</th>
<td>{{ $pembelian->id_vendor }}</td>
</tr>

<tr>
<th>Jumlah Barang</th>
<td>{{ $pembelian->Jumlah_Barang}}</td>
</tr>

<tr>
<th>Total Harga Beli</th>
<td>{{ $pembelian->Total_HargaBeli }}</td>
</tr>


<tr>
<th>Tanggal Beli</th>
<td>{{ $pembelian->Tanggal_beli}}</td>
</tr>

</table>
</div>

@stop

@section('footer')
	@include('footer')
@stop
