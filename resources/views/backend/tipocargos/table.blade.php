<table class="table table-responsive" id="tipocargos-table">
    <thead>
        <th>Cargo</th>
        <th>Abreviatura</th>
        <th>Tipo Entidad</th>
        <th colspan="3">Acción</th>
    </thead>
    <tbody>
    @foreach($tipocargos as $tipocargo)
        <tr>
            <td>{!! $tipocargo->cargo !!}</td>
            <td>{!! $tipocargo->abreviatura !!}</td>
            <td>{!! $tipocargo->fk_tipoentidad !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.tipocargos.destroy', $tipocargo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.tipocargos.show', [$tipocargo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.tipocargos.edit', [$tipocargo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>