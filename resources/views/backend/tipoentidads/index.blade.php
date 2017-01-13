@extends('backend.layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Tipos Entidades</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('backend.tipoentidads.create') !!}">Nuevo</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('backend.tipoentidads.table')
            </div>
        </div>
    </div>
@endsection

