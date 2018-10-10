Hola <i>{{ $postulante_nombre }}</i>,
<p>Informe de Concurso</p>

<p><u>Estimado  , se le informa de la sustanciacion del concurso :</u></p>

<div>
<p><b>Referencia General:</b>&nbsp;{{ $referenciaGeneral}}</p>
<p><b>Fecha Sustanciacion:</b>&nbsp;{{ $fechaSustanciacion }}</p>
</div>

<p><u>Values passed by With method:</u></p>

<div>
<p><b>Estado del Concurso:</b>&nbsp;{{ $estado }}</p>
<p><b>Usuario:</b>&nbsp;{{ $usuarioSustanciacion }}</p>
</div>

Muchas Gracias

<br/>
<i>{{ $usuarioSustanciacion }}</i>
