<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $tipocargo->id !!}</p>
</div>

<!-- Cargo Field -->
<div class="form-group">
    {!! Form::label('cargo', 'Cargo:') !!}
    <p>{!! $tipocargo->cargo !!}</p>
</div>

<!-- Abreviatura Field -->
<div class="form-group">
    {!! Form::label('abreviatura', 'Abreviatura:') !!}
    <p>{!! $tipocargo->abreviatura !!}</p>
</div>

<!-- Fk Tipoentidad Field -->
<div class="form-group">
    {!! Form::label('fk_tipoentidad', 'Fk Tipoentidad:') !!}
    <p>{!! $tipocargo->fk_tipoentidad !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $tipocargo->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $tipocargo->updated_at !!}</p>
</div>

