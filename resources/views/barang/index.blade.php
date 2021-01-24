@extends ('template_backend.home')
@section ('judul', 'Daftar Produk')
@section ('content')


@if(!empty($barang))
<a href="{{ url('barang/create') }}" class="btn btn-info btn-sm">+ Tambah Produk</a>
<br></br>
<table class="table table-striped table-hover table-sm">
	<thead>
		<tr>
			<th>No</th>
			<th>Id Barang</th>
			<th>Id Kategori</th>
			<th>Id Satuan</th>
			<th>Nama Barang</th>
			<th>Brand Barang</th>
			<th>Stok Barang</th>
			<th>Harga Barang</th>
			<th>Harga Jual</th>
			<th>Harga Beli</th>
			<th>Action</th>
		</tr>
	</thead>


<tbody>
		@foreach ($barang as $result => $hasil)
		<tr>
			<td>{{ $result +1 }}</td>
			<td>{{ $hasil->id_barang }}</td>
			<td>{{ $hasil->id_kategori }}</td>
			<td>{{ $hasil->id_satuan }}</td>
			<td>{{ $hasil->nama_barang }}</td>
			<td>{{ $hasil->brand_barang }}</td>
			<td>{{ $hasil->stok_barang }}</td>
			<td>{{ $hasil->harga_barang }}</td>
			<td>{{ $hasil->harga_jual }}</td>
			<td>{{ $hasil->harga_beli }}</td>
			<td style="width: 20%">
				<div class="box-button">
				<a href=""
				class="btn btn-warning btn-sm">Edit</a>

				<a href=""
				class="btn btn-warning btn-sm">Delete</a>
				</div>
			</td>
		</tr>
		
	@endforeach
</tbody>
</table>
@endif
@stop