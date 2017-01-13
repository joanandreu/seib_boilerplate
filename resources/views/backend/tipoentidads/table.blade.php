<table class="table table-responsive" id="tipoentidads-table">
    <thead>
        <th>Tipo</th>
        <th>Abreviatura</th>
        <th>Tipofuncional</th>
        <th>Tipopadre</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tipoentidads as $tipoentidad)
        <tr>
            <td>{!! $tipoentidad->tipo !!}</td>
            <td>{!! $tipoentidad->abreviatura !!}</td>
            <td>{!! $tipoentidad->tipofuncional !!}</td>
            <td>{!! $tipoentidad->tipopadre !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.tipoentidads.destroy', $tipoentidad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.tipoentidads.show', [$tipoentidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.tipoentidads.edit', [$tipoentidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>