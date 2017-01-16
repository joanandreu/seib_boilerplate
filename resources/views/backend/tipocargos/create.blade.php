@extends('backend.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Alta Cargo
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'backend.tipocargos.store']) !!}

                        @include('backend.tipocargos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
