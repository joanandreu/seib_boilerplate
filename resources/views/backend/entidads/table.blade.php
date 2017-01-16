<table class="table table-responsive" id="entidads-table">
    <thead>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Email</th>     
        <th>Responsable</th>  
        <th>Municipio</th>  
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($entidads as $entidad)
        <tr>
            <td>{!! $entidad->entidad !!}</td>
            <td>{!! $entidad->telefonoprincipal !!}</td>
            <td>{!! $entidad->emailprincipal !!}</td>
            <td>{!! $entidad->responsable !!}</td>
            <td>{!! $entidad->municipio !!}</td>
            

            <td>
                {!! Form::open(['route' => ['backend.entidads.destroy', $entidad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.entidads.show', [$entidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.entidads.edit', [$entidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>