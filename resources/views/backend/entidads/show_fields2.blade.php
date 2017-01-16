<div class="row">


<!-- Entidad Field -->


<!-- Abreviatura Field -->
<div class="form-group col-sm-3">
    {!! Form::label('abreviatura', 'Nombre Abreviado:') !!}
    {!! Form::text('abreviatura', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoentidad Field -->
<div class="form-group col-sm-2">
    {!! Form::label('tipoentidad', 'Tipo Entidad:') !!}
    {!! Form::select('tipoentidad',$tipoentidads , null, ['class' => 'form-control']) !!}
</div>
 </div>
 

<!-- Nivel Field -->
<div class="form-group col-sm-2">
    {!! Form::label('nivel', 'Nivel:') !!}
    {!! Form::select('nivel', 
    ['Servicio Central' => 'Servicio Central',
     'Delegación' => 'Delegación',
     'Centro Territorial' => 'Centro Territorial'], null, ['class' => 'form-control']) !!}

</div>

<!-- Cif Field -->
<div class="form-group col-sm-2">
    {!! Form::label('cif', 'CIF:') !!}
    {!! Form::text('cif', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefonoprincipal Field -->
<div class="form-group col-sm-2">
    {!! Form::label('telefonoprincipal', 'Telefono principal:') !!}
    {!! Form::number('telefonoprincipal', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Telprincipal Field -->
<div class="form-group col-sm-2">
    {!! Form::label('descripcion_telprincipal', 'Descripción Teléfono principal:') !!}
    {!! Form::text('descripcion_telprincipal', null, ['class' => 'form-control']) !!}
</div>
 
<!-- Emailprincipal Field -->
<div class="form-group col-sm-2">
    {!! Form::label('emailprincipal', 'Email principal:') !!}
    {!! Form::text('emailprincipal', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Emailprincipal Field -->
<div class="form-group col-sm-2">
    {!! Form::label('descripcion_emailprincipal', 'Descripción Email principal:') !!}
    {!! Form::text('descripcion_emailprincipal', null, ['class' => 'form-control']) !!}
</div>

<!-- Responsable Field -->
<div class="form-group col-sm-3">
    {!! Form::label('responsable', 'Responsable:') !!}
    {!! Form::text('responsable', null, ['class' => 'form-control']) !!}
</div>

<!-- Municipio Field -->
<div class="form-group col-sm-3">
    {!! Form::label('municipio', 'Municipio:') !!}
    {!! Form::text('municipio', null, ['class' => 'form-control']) !!}
</div>

<!-- Calle Field -->
<div class="form-group col-sm-3">
    {!! Form::label('calle', 'Calle:') !!}
    {!! Form::text('calle', null, ['class' => 'form-control']) !!}
</div>

<!-- Ine Via Field -->
<div class="form-group col-sm-2">
    {!! Form::label('ine_via', 'INE Via:') !!}
    {!! Form::number('ine_via', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-1">
    {!! Form::label('numero', 'Numero:') !!}
    {!! Form::number('numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Piso Field -->
<div class="form-group col-sm-1">
    {!! Form::label('piso', 'Piso:') !!}
    {!! Form::text('piso', null, ['class' => 'form-control']) !!}
</div>

<!-- Puerta Field -->
<div class="form-group col-sm-1">
    {!! Form::label('puerta', 'Puerta:') !!}
    {!! Form::text('puerta', null, ['class' => 'form-control']) !!}
</div>

<!-- Escalera Field -->
<div class="form-group col-sm-1">
    {!! Form::label('escalera', 'Escalera:') !!}
    {!! Form::text('escalera', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Coordenadas Field -->
<div class="form-group col-sm-2">
    {!! Form::label('tipo_coordenadas', 'Tipo Coordenadas:') !!}
    {!! Form::text('tipo_coordenadas', null, ['class' => 'form-control']) !!}
</div>

<!-- Lon Field -->
<div class="form-group col-sm-1">
    {!! Form::label('lon', 'Lon:') !!}
    {!! Form::text('lon', null, ['class' => 'form-control']) !!}
</div>

<!-- Lat Field -->
<div class="form-group col-sm-1">
    {!! Form::label('lat', 'Lat:') !!}
    {!! Form::text('lat', null, ['class' => 'form-control']) !!}
</div>

<!-- X Field -->
<div class="form-group col-sm-1">
    {!! Form::label('x', 'X:') !!}
    {!! Form::text('x', null, ['class' => 'form-control']) !!}
</div>

<!-- Y Field -->
<div class="form-group col-sm-1">
    {!! Form::label('y', 'Y:') !!}
    {!! Form::text('y', null, ['class' => 'form-control']) !!}
</div>

<!-- Comentarios Field -->
<div class="form-group col-sm-12">
    {!! Form::label('comentarios', 'Comentarios:') !!}
    {!! Form::text('comentarios', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.entidads.index') !!}" class="btn btn-default">Cancelar</a>
</div>
