@if (isset($pelanggan))
    {!! Form::hidden('id', $pelanggan->id) !!}
@endif

@if ($errors->any())
    <div class="form-group {{ $errors->has('id_pelanggan') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('id_pelanggan', 'Id_Pelanggan:', ['class' => 'control-label']) !!}
    {!! Form::text('id_pelanggan', null, ["class" => 'form-control']) !!}
    @if ($errors->has('id_pelanggan'))
        <span class="help-block">{{ $errors->first('id_pelanggan') }}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_pelanggan') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('nama_pelanggan', 'Nama_Pelanggan:', ['class' => 'control-label']) !!}
    {!! Form::text('nama_pelanggan', null, ["class" => 'form-control']) !!}
    @if ($errors->has('nama_pelanggan'))
        <span class="help-block">{{ $errors->first('nama_pelanggan') }}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('telepon_pelanggan') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('telepon_pelanggan', 'Telepon_Pelanggan:', ['class' => 'control-label']) !!}
    {!! Form::text('telepon_pelanggan', null, ["class" => 'form-control']) !!}
    @if ($errors->has('telepon_pelanggan'))
        <span class="help-block">{{ $errors->first('telepon_pelanggan') }}</span>
    @endif
</div>


@if ($errors->any())
    <div class="form-group {{ $errors->has('alamat_pelanggan') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('alamat_pelanggan', 'Alamat_Pelanggan:', ['class' => 'control-label']) !!}
    {!! Form::text('alamat_pelanggan', null, ['class' => 'form-control']) !!}
    @if ($errors->has('alamat_pelanggan'))
        <span class="help-block">{{ $errors->first('alamat_pelanggan') }}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('email') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
    @if ($errors->has('email'))
        <span class="help-block">{{ $errors->first('email') }}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('kota') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('kota', 'Kota:', ['class' => 'control-label']) !!}
    {!! Form::text('kota', null, ['class' => 'form-control']) !!}
    @if ($errors->has('kota'))
        <span class="help-block">{{ $errors->first('kota') }}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('status') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('status', 'Status:', ['class' => 'control-label']) !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
    @if ($errors->has('status'))
        <span class="help-block">{{ $errors->first('status') }}</span>
    @endif
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>