@extends('template')

@section('main')
<div id="barang">
<h2>Tambah Produk</h2>
<table class="table table-striped">

<tr>
<th>Id Barang</th>
<td>{{ $barang->id_barang }}</td>
</tr>

<tr>
<th>Id Kategori</th>
<td>{{ $barang->id_kategori }}</td>
</tr>

<tr>
<th>Id Satuan</th>
<td>{{ $barang->id_satuan }}</td>
</tr>

<tr>
<th>Nama Barang</th>
<td>{{ $barang->nama_barang }}</td>
</tr>

<tr>
<th>Brand Barang</th>
<td>{{ $barang->brand_barang }}</td>
</tr>

<tr>
<th>Stok Barang</th>
<td>{{ $barang->stok_barang}}</td>
</tr>

<tr>
<th>Harga Barang</th>
<td>{{ $barang->harga_barang }}</td>
</tr>

<tr>
<th>Harga Jual</th>
<td>{{ $barang->harga_jual}}</td>
</tr>

<tr>
<th>Harga Beli</th>
<td>{{ $barang->harga_beli}}</td>
</tr>

</table>
</div>

@stop

@section('footer')
	@include('footer')
@stop
