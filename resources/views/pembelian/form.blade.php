@if (isset($pembelian))
    {!! Form::hidden('id', $pembelian->id) !!}
@endif

@if ($errors->any())
    <div class="form-group {{ $errors->has('id_pembelian') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('id_pembelian', 'Id_Pembelian:', ['class' => 'control-label']) !!}
    {!! Form::text('id_pembelian', null, ["class" => 'form-control']) !!}
    @if ($errors->has('id_pembelian'))
        <span class="help-block">{{ $errors->first('id_pembelian') }}</span>
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
    <div class="radio">
        <label>{!! Form::radio('email_admin', 'A001') !!} adelina@gmail.com</label>
    </div>
    <div class="radio">
        <label>{!! Form::radio('email_admin', 'A002') !!} nelyfebrianita@gmail.com</label>
    </div>
    @if ($errors->has('email_admin'))
        <span class="help-block">{{ $errors->first('email_admin') }}</span>
    @endif
</div>


<!-- @if ($errors->any())
    <div class="form-group {{ $errors->has('email_admin') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('email_admin', 'Email_Admin:', ['class' => 'control-label']) !!}
    {!! Form::text('email_admin', null, ["class" => 'form-control']) !!}
    @if ($errors->has('email_admin'))
        <span class="help-block">{{ $errors->first('email_admin') }}</span>
    @endif
</div> -->


@if ($errors->any())
    <div class="form-group {{ $errors->has('id_vendor') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('id_vendor', 'Id_Vendor:', ['class' => 'control-label']) !!}
    {!! Form::text('id_vendor', null, ['class' => 'form-control']) !!}
    @if ($errors->has('id_vendor'))
        <span class="help-block">{{ $errors->first('id_vendor') }}</span>
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
    <div class="form-group {{ $errors->has('Total_HargaBeli') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('Total_HargaBeli', 'Total Harga Beli:', ['class' => 'control-label']) !!}
    {!! Form::text('Total_HargaBeli', null, ['class' => 'form-control']) !!}
    @if ($errors->has('Total_HargaBeli'))
        <span class="help-block">{{ $errors->first('Total_HargaBeli') }}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('Tanggal_beli') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('Tanggal_beli', 'Tanggal Beli:', ['class' => 'control-label']) !!}
    {!! Form::date('Tanggal_beli', !empty($pembelian) ? $pembelian->Tanggal_beli->format('Y-m-d'): null, ['class' => 'form-control', 'id' => 'Tanggal_beli']) !!}
    @if ($errors->has('Tanggal_beli'))
        <span class="help-block">{{ $errors->first('Tanggal_beli') }}</span>
    @endif
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>




