@extends('backend.layouts.app')

@section('content')
   
     <div class="content">
        <div class="box box-solid box-default">
        <div class="box-header with-border ">
            <p class="box-title"> <h1><b> {!! $entidad->entidad !!}</b></h1></p>
            <div class="box-tools pull-right">
            <span class="btn btn-primary" href="{!! route('backend.entidads.edit', [$entidad->id]) !!}">Editar</span> 
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
                                    <!-- Id Field -->
                                    <div class="form-group col-sm-1">
                                        {!! Form::label('id', 'Num ref:') !!}
                                        <h3>{!! $entidad->id !!}</h3>
                                    </div>

                                    <!-- Entidad Field -->
                                    <div class="form-group col-sm-5">
                                        {!! Form::label('entidad', 'Nombre o Razón Social:') !!}
                                        <h3>{!! $entidad->entidad !!}</h3>
                                    </div>
                                    <!-- Abreviatura Field -->
                                    <div class="form-group col-sm-3">
                                        {!! Form::label('abreviatura', 'Abreviatura:') !!}
                                        <h3>{!! $entidad->abreviatura !!}</h3>
                                    </div>

                                     <!-- Cif Field -->
                                    <div class="form-group col-sm-3">
                                        {!! Form::label('cif', 'CIF:') !!}
                                        <h3>{!! $entidad->cif !!}</h3>
                                    </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
                                    <!-- Tipoentidad Field -->
                                    <div class="form-group col-sm-3">
                                        {!! Form::label('tipoentidad', 'Tipoentidad:') !!}
                                        <h3>{!! $entidad->tipoentidad !!}</h3>
                                    </div>

                                    <!-- Tipofuncional Field -->
                                    <div class="form-group col-sm-3">
                                        {!! Form::label('tipofuncional', 'Tipofuncional:') !!}
                                        <h3></h3>
                                    </div>

                                    <!-- Nivel Field -->
                                    <div class="form-group col-sm-3">
                                        {!! Form::label('nivel', 'Nivel:') !!}
                                        <h3>{!! $entidad->nivel !!}</h3>
                                    </div>

                                    <!-- Responsable Field -->
                                    <div class="form-group col-sm-3">
                                        {!! Form::label('responsable', 'Responsable:') !!}
                                        <h3>{!! $entidad->responsable !!}</h3>
                                    </div>
        </div><!-- box-footer -->
        </div><!-- /.box -->

        <div class="box box-default">   
        <div class="box-body">
                                    <!-- Telefonoprincipal Field -->
                                    <div class="form-group col-sm-3">
                                        {!! Form::label('telefonoprincipal', 'Teléfono principal:') !!}
                                        <p>{!! $entidad->telefonoprincipal !!}</p>
                                    </div>

                                    <!-- Descripcion Telprincipal Field -->
                                    <div class="form-group col-sm-9">
                                        {!! Form::label('descripcion_telprincipal', 'Descripción:') !!}
                                        <p>{!! $entidad->descripcion_telprincipal !!}</p>
                                    </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
                                    <!-- Emailprincipal Field -->
                                    <div class="form-group col-sm-3">
                                        {!! Form::label('emailprincipal', 'Email principal:') !!}
                                        <p>{!! $entidad->emailprincipal !!}</p>
                                    </div>

                                    <!-- Descripcion Emailprincipal Field -->
                                    <div class="form-group col-sm-9">
                                        {!! Form::label('descripcion_emailprincipal', 'Descripción:') !!}
                                        <p>{!! $entidad->descripcion_emailprincipal !!}</p>
                                    </div>
        </div><!-- box-footer -->
        </div><!-- /.box -->

        <div class="box box-default">   
        <div class="box-body">
                                    <!-- Municipio Field -->
                                    <div class="form-group col-sm-2">
                                        {!! Form::label('municipio', 'Municipio:') !!}
                                        <p>{!! $entidad->municipio !!}</p>
                                    </div>

                                    <!-- Calle Field -->
                                    <div class="form-group col-sm-6">
                                        {!! Form::label('calle', 'Calle:') !!}
                                        <p>{!! $entidad->calle !!}</p>
                                    </div>

                                   

                                    <!-- Numero Field -->
                                    <div class="form-group col-sm-1">
                                        {!! Form::label('numero', 'Numero:') !!}
                                        <p>{!! $entidad->numero !!}</p>
                                    </div>

                                    <!-- Piso Field -->
                                    <div class="form-group col-sm-1">
                                        {!! Form::label('piso', 'Piso:') !!}
                                        <p>{!! $entidad->piso !!}</p>
                                    </div>

                                    <!-- Puerta Field -->
                                    <div class="form-group col-sm-1">
                                        {!! Form::label('puerta', 'Puerta:') !!}
                                        <p>{!! $entidad->puerta !!}</p>
                                    </div>

                                    <!-- Escalera Field -->
                                    <div class="form-group col-sm-1">
                                        {!! Form::label('escalera', 'Escalera:') !!}
                                        <p>{!! $entidad->escalera !!}</p>
                                    </div>

        </div><!-- /.box-body -->
        <div class="box-footer">
                                    <!-- Ine Via Field -->
                                    <div class="form-group col-sm-2">
                                        {!! Form::label('ine_via', 'Ine Via:') !!}
                                        <p>{!! $entidad->ine_via !!}</p>
                                    </div>
                                    <!-- Tipo Coordenadas Field -->
                                    <div class="form-group col-sm-2">
                                        {!! Form::label('tipo_coordenadas', 'Tipo Coordenadas:') !!}
                                        <p>{!! $entidad->tipo_coordenadas !!}</p>
                                    </div>

                                    <!-- Lon Field -->
                                    <div class="form-group col-sm-1">
                                        {!! Form::label('lon', 'Lon:') !!}
                                        <p>{!! $entidad->lon !!}</p>
                                    </div>

                                    <!-- Lat Field -->
                                    <div class="form-group col-sm-1">
                                        {!! Form::label('lat', 'Lat:') !!}
                                        <p>{!! $entidad->lat !!}</p>
                                    </div>

                                    <!-- X Field -->
                                    <div class="form-group col-sm-1">
                                        {!! Form::label('x', 'X:') !!}
                                        <p>{!! $entidad->x !!}</p>
                                    </div>

                                    <!-- Y Field -->
                                    <div class="form-group col-sm-1">
                                        {!! Form::label('y', 'Y:') !!}
                                        <p>{!! $entidad->y !!}</p>
                                    </div>
                                    <div class="form-group col-sm-4">
                                    <a class="btn btn-default pull-right ">
                                    <i class="fa fa-map"> </i>  Mapa
                                    </a>
                                    </div>
        </div><!-- box-footer -->
        </div><!-- /.box -->
        <div class="box box-default">   
        <div class="box-body">
           TELEFONOS /FAX  EXTRA                         
                              

        </div><!-- /.box-body -->
        <div class="box-footer">
           HORARIOS
                                   
        </div><!-- box-footer -->
        </div><!-- /.box -->
        <div class="box box-default">   
        <div class="box-body">
                       
        {!! Form::label('comentarios', 'Comentarios:') !!}      

        </div><!-- /.box-body -->
        <div class="box-footer">
           <!-- Comentarios Field -->
        <div class="form-group col-sm-12">
    
         <p>{!! $entidad->comentarios !!}</p>
         </div>
                                   
        </div><!-- box-footer -->
        </div><!-- /.box -->















     <a href="{!! route('backend.entidads.index') !!}" class="btn btn-default">Regresar</a>
@endsection
