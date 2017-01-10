@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Entidad
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($entidad, ['route' => ['admin.entidads.update', $entidad->id], 'method' => 'patch']) !!}

                        @include('admin.entidads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection