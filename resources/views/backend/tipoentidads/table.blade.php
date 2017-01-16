<table class="table table-responsive" id="tipoentidads-table">
    <thead>
        <th>Tipo</th>
        <th>Abreviatura</th>
        <th>Tipofuncional</th>
       
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tipoentidads as $tipoentidad)
        <tr>
            <td> 
            @if ($tipoentidad->tipopadre  == '1')  
           -  
            @endif
            @if ($tipoentidad->tipopadre  == '2')  
           - - 
            @endif
            @if ($tipoentidad->tipopadre  == '3')  
           - - -
            @endif
             @if ($tipoentidad->tipopadre  == '4')  
           - - - -
            @endif
            @if ($tipoentidad->tipopadre  == '5')  
           - - - -
            @endif
            
            {!! $tipoentidad->tipo !!}
            </td>
            <td>{!! $tipoentidad->abreviatura !!}</td>
            <td>{!! $tipoentidad->tipofuncional !!}</td>
            
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