<!-- Requisitoitem Id Field -->
<div class="form-group">
    {!! Form::label('requisitoitem_id', 'Requisitoitem Id:') !!}
    <p>{!! $requisitoPostulante->requisitoitem_id !!}</p>
</div>

<!-- Postulante Id Field -->
<div class="form-group">
    {!! Form::label('postulante_id', 'Postulante Id:') !!}
    <p>
      Identificador : {!! $requisitoPostulante->postulante_id !!} <br>
      Documento :  {!! $requisitoPostulante->postulante->documento!!} <br>
      Nombre : {!! $requisitoPostulante->postulante->apellidos!!} <br>
      Apellido :  {!! $requisitoPostulante->postulante->nombres!!} <br>
    </p>

      <a href="{{ action('PostulanteController@show', $requisitoPostulante->postulante_id ) }}"><p> {!! Form::button('Ver Más!')!!}</a>
</div>


<!-- Requisitoestado Field -->
<div class="form-group">
    {!! Form::label('cumpleRequisito', 'cumpleRequisito:') !!}
    <p>{!! $requisitoPostulante->cumpleRequisito !!}</p>
</div>
