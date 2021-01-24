@if (isset($penjualan))
    {!! Form::hidden('id', $penjualan->id) !!}
@endif


@if ($errors->any())
    <div class="form-group {{ $errors->has('id_penjualan') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('id_penjualan', 'Id_Penjualan:', ['class' => 'control-label']) !!}
    {!! Form::text('id_penjualan', null, ["class" => 'form-control']) !!}
    @if ($errors->has('id_penjualan'))
        <span class="help-block">{{ $errors->first('id_penjualan') }}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('id_barang') ? 'has-error' : 'has-success' }}">
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
    <div class="form-group {{ $errors->has('email_admin') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('email_admin', 'Email_Admin:', ['class' => 'control-label']) !!}
    {!! Form::text('email_admin', null, ["class" => 'form-control']) !!}
    @if ($errors->has('email_admin'))
        <span class="help-block">{{ $errors->first('email_admin') }}</span>
    @endif
</div>


@if ($errors->any())
    <div class="form-group {{ $errors->has('id_pelanggan') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('id_pelanggan', 'Id_Pelanggan:', ['class' => 'control-label']) !!}
    {!! Form::text('id_pelanggan', null, ['class' => 'form-control']) !!}
    @if ($errors->has('id_pelanggan'))
        <span class="help-block">{{ $errors->first('id_pelanggan') }}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('Total_HargaJual') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('Total_HargaJual', 'Total_HargaJual:', ['class' => 'control-label']) !!}
    {!! Form::text('Total_HargaJual', null, ['class' => 'form-control']) !!}
    @if ($errors->has('Total_HargaJual'))
        <span class="help-block">{{ $errors->first('Total_HargaJual') }}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('Jumlah_Barang') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('Jumlah_Barang', 'Jumlah_Barang:', ['class' => 'control-label']) !!}
    {!! Form::text('Jumlah_Barang', null, ['class' => 'form-control']) !!}
    @if ($errors->has('Jumlah_Barang'))
        <span class="help-block">{{ $errors->first('Jumlah_Jarang') }}</span>
    @endif
</div>


@if ($errors->any())
    <div class="form-group {{ $errors->has('Tanggal_jual') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('Tanggal_jual', 'Tanggal_Jual:', ['class' => 'control-label']) !!}
    {!! Form::date('Tanggal_jual', !empty($penjualan) ? $penjualan->Tanggal_jual->format('Y-m-d'): null, ['class' => 'form-control', 'id' => 'Tanggal_jual']) !!}
    @if ($errors->has('Tanggal_jual'))
        <span class="help-block">{{ $errors->first('Tanggal_jual') }}</span>
    @endif
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>




