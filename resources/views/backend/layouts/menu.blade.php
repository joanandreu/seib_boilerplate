<li class="{{ Request::is('tipocargos*') ? 'active' : '' }}">
    <a href="{!! route('backend.tipocargos.index') !!}"><i class="fa fa-edit"></i><span>Tipocargos</span></a>
</li>

<li class="{{ Request::is('entidads*') ? 'active' : '' }}">
    <a href="{!! route('backend.entidads.index') !!}"><i class="fa fa-edit"></i><span>Entidads</span></a>
</li>

