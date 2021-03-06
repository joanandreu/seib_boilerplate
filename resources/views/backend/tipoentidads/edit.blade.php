@extends('backend.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipoentidad
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoentidad, ['route' => ['backend.tipoentidads.update', $tipoentidad->id], 'method' => 'patch']) !!}

                        @include('backend.tipoentidads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection