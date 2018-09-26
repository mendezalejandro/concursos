{!! Form::open(['route' => ['concursos.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('concursos.show', $id) }}" data-toggle="tooltip" title ="ver" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    @if ( Auth::user()->rol == 'Administrador' || Auth::user()->rol == 'Administrativo' )

    <a href="{{ route('concursos.edit', $id) }}" data-toggle="tooltip" title ="editar" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>

      {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'data-toggle'=>'tooltip',
        'title'=> 'eliminar',
          'type' => 'submit',
          'class' => 'btn btn-danger btn-xs',
          'onclick' => "return confirm('¿Está seguro que desea eliminar el registro?')"
      ]) !!}
    @endif

<a href="{{ url('/mail/send', $id) }}" data-toggle="tooltip" title ="mail" class='btn btn-default btn-xs'>
  <i class="glyphicon glyphicon-send"></i>
</a>
<!--cambia de estado a un concurso-->
<button type="button" class="btn btn-success btn-xs dropdown-toggle"
 data-toggle="dropdown">Cambiar Estado<span class="caret"></span></button>
<ul class="dropdown-menu" role="menu">
  <li><a href="{{ url('/abierto', $id ) }}">Abierto</a></li>
  <li><a href="{{ url('/cerrado', $id ) }}">Cerrado</a></li>
  <li><a href="{{ url('/impugnado', $id ) }}">Impugnado</a></li>
  <li><a href="{{ url('/vacante', $id ) }}">Vacante</a></li>
</ul>
<!--------------------------------->
</div>

{!! Form::close() !!}
