@extends('backend.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar cargo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipocargo, ['route' => ['backend.tipocargos.update', $tipocargo->id], 'method' => 'patch']) !!}

                        @include('backend.tipocargos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection