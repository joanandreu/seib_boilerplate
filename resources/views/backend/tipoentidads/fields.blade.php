<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Abreviatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('abreviatura', 'Abreviatura:') !!}
    {!! Form::text('abreviatura', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipofuncional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipofuncional', 'Tipofuncional:') !!}
    {!! Form::select('tipofuncional', 
    ['Administración Pública' => 'Administración Pública',
     'Administración Titular' => 'Administración Titular',
     'Empresa o Entidad Privada' => 'Empresa o Entidad Privada',
     'Organismo Público' => 'Organismo Público',
     'Empresa pública' => 'Empresa pública',
     ], null, ['class' => 'form-control']) !!}
</div>

<!-- Tipopadre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipopadre', 'Tipopadre:') !!}
    {!! Form::text('tipopadre', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.tipoentidads.index') !!}" class="btn btn-default">Cancel</a>
</div>
