@extends ('template_backend.home')
@section ('judul', 'Daftar Pelanggan')
@section ('content')

@if(!empty($pelanggan))
<a href="{{ url('pelanggan/create') }}" class="btn btn-info btn-sm">+ Tambah Pelanggan</a>
<br></br>
<table class="table table-striped table-hover table-sm">
	<thead>
		<tr>
			<th>No</th>
			<th>Id</th>
			<th>Id Pelanggan</th>
			<th>Nama Pelanggan</th>
			<th>Telepon Pelanggan</th>
			<th>Alamat Pelanggan</th>
			<th>Email</th>
			<th>Kota</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>


<tbody>
		@foreach ($pelanggan as $result => $hasil)
		<tr>
			<td>{{ $result +1 }}</td>
			<td>{{ $hasil->id }}</td>
			<td>{{ $hasil->id_pelanggan}}</td>
			<td>{{ $hasil->nama_pelanggan }}</td>
			<td>{{ $hasil->telepon_pelanggan }}</td>
			<td>{{ $hasil->alamat_pelanggan }}</td>
			<td>{{ $hasil->email }}</td>
			<td>{{ $hasil->kota }}</td>
			<td>{{ $hasil->status }}</td>
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