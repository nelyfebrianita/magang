@if (isset($barang))
    {!! Form::hidden('id', $barang->id) !!}
@endif

@if ($errors->any())
    <div class="form-group {{ $errors->has('id_dbarang') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('id_barang', 'Id_Barang:', ['class' => 'control-label']) !!}
    {!! Form::text('id_barang', null, ["class" => 'form-control']) !!}
    @if ($errors->has('id_barang'))
        <span class="help-block">{{ $errors->first('id_barang') }}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('id_kategori') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('id_kategori', 'Id_Kategori:', ['class' => 'control-label']) !!}
    {!! Form::text('id_kategori', null, ["class" => 'form-control']) !!}
    @if ($errors->has('id_kategori'))
        <span class="help-block">{{ $errors->first('id_kategori') }}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('id_satuan') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('id_satuan', 'Id Satuan:', ['class' => 'control-label']) !!}
    <div class="radio">
        <label>{!! Form::radio('id_satuan', 'S001') !!} pcs</label>
    </div>
    <div class="radio">
        <label>{!! Form::radio('id_satuan', 'S002') !!} kg</label>
    </div>
    @if ($errors->has('id_satuan'))
        <span class="help-block">{{ $errors->first('id_satuan') }}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_barang') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('nama_barang', 'Nama Barang:', ['class' => 'control-label']) !!}
    {!! Form::text('nama_barang', null, ['class' => 'form-control']) !!}
    @if ($errors->has('nama_barang'))
        <span class="help-block">{{ $errors->first('nama_barang') }}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('brand_barang') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('brand_barang', 'Brand Barang:', ['class' => 'control-label']) !!}
    {!! Form::text('brand_barang', null, ['class' => 'form-control']) !!}
    @if ($errors->has('brand_barang'))
        <span class="help-block">{{ $errors->first('brand_barang') }}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('stok_barang') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('stok_barang', 'Stok Barang:', ['class' => 'control-label']) !!}
    {!! Form::text('stok_barang', null, ['class' => 'form-control']) !!}
    @if ($errors->has('stok_barang'))
        <span class="help-block">{{ $errors->first('stok_barang') }}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('harga_barang') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('harga_barang', 'Harga Barang:', ['class' => 'control-label']) !!}
    {!! Form::text('harga_barang', null, ['class' => 'form-control']) !!}
    @if ($errors->has('harga_barang'))
        <span class="help-block">{{ $errors->first('harga_barang') }}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('harga_jual') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('harga_jual', 'Harga Jual:', ['class' => 'control-label']) !!}
    {!! Form::text('harga_jual', null, ['class' => 'form-control']) !!}
    @if ($errors->has('harga_jual'))
        <span class="help-block">{{ $errors->first('harga_jual') }}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('harga_beli') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('harga_beli', 'Harga Beli:', ['class' => 'control-label']) !!}
    {!! Form::text('harga_beli', null, ['class' => 'form-control']) !!}
    @if ($errors->has('harga_beli'))
        <span class="help-block">{{ $errors->first('harga_beli') }}</span>
    @endif
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>