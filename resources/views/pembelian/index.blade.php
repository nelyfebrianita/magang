@extends ('template_backend.home')
@section ('judul', 'Daftar Pembelian')
@section ('content')

@if(!empty($pembelian))
<a href="{{ url('pembelian/create') }}" class="btn btn-info btn-sm">+ Tambah Pembelian</a>
<br></br>
<table class="table table-striped table-hover table-sm">
	<thead>
		<tr>
			<th>No</th>
			<th>Id</th>
			<th>Id Pembelian</th>
			<th>Id Barang</th>
			<th>Email Admin</th>
			<th>Id Vendor</th>
			<th>Jumlah Barang</th>
			<th>Total Harga Beli</th>
			<th>Tanggal Beli</th>
			<th>Action</th>
		</tr>
	</thead>


<tbody>
		@foreach ($pembelian as $result => $hasil)
		<tr>
			<td>{{ $result +1 }}</td>
			<td>{{ $hasil->id }}</td>
			<td>{{ $hasil->id_pembelian}}</td>
			<td>{{ $hasil->id_barang }}</td>
			<td>{{ $hasil->email_admin }}</td>
			<td>{{ $hasil->id_vendor }}</td>
			<td>{{ $hasil->Jumlah_Barang }}</td>
			<td>{{ $hasil->Total_HargaBeli }}</td>
			<td>{{ $hasil->Tanggal_beli }}</td>
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