@extends ('template_backend.home')
@section ('judul', 'Daftar Penjualan')
@section ('content')

@if(!empty($penjualan))
<a href="{{ url('penjualan/create') }}" class="btn btn-info btn-sm">+ Tambah Penjualan</a>
<br></br>
<table class="table table-striped table-hover table-sm">
	<thead>
		<tr>
			<th>No</th>
			<th>Id</th>
			<th>Id Penjualan</th>
			<th>Id Barang</th>
			<th>Email Admin</th>
			<th>Id Pelanggan</th>
			<th>Total Harga Jual</th>
			<th>Jumlah Barang</th>
			<th>Tanggal Jual</th>
			<th>Action</th>
		</tr>
	</thead>


<tbody>
		@foreach ($penjualan as $result => $hasil)
		<tr>
			<td>{{ $result +1 }}</td>
			<td>{{ $hasil->id }}</td>
			<td>{{ $hasil->id_penjualan}}</td>
			<td>{{ $hasil->id_barang }}</td>
			<td>{{ $hasil->email_admin }}</td>
			<td>{{ $hasil->id_pelanggan }}</td>
			<td>{{ $hasil->Total_HargaJual }}</td>
			<td>{{ $hasil->Jumlah_Barang }}</td>
			<td>{{ $hasil->Tanggal_jual }}</td>
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