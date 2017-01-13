<!-- Cargo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cargo', 'Cargo:') !!}
    {!! Form::text('cargo', null, ['class' => 'form-control']) !!}
</div>

<!-- Abreviatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('abreviatura', 'Abreviatura:') !!}
    {!! Form::text('abreviatura', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('fk_tipoentidad', 'Tipo entidad:') !!}
     
    {!! Form::select('fk_tipoentidad',$tipoentidads , null, ['class' => 'form-control']) !!} 

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.tipocargos.index') !!}" class="btn btn-default">Cancel</a>
</div>
