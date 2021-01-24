<!-- @extends('template')

@section('main')
  <div id="barang">
    <h2>Edit Produk</h2>
    {!! Form::model($barang, ['method' => 'PATCH', 'action' => ['BarangController@update', $barang->id]]) !!}
    @include('barang.form', ['submitButtonText' => 'Simpan'])
    {!! Form::close() !!}
  </div>
@stop

@section('footer')
  @include('footer')
@stop -->