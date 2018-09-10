<div class="form-group col-sm-12">
    <section class="content-header">
            <h1>
                Mesa de entradas
            </h1>
    </section>
</div>
<!-- Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombres', 'Nombres:') !!}
    {!! Form::text('nombres', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellidos', 'Apellidos:') !!}
    {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
</div>

<!-- Documento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('documento', 'Documento:') !!}
    {!! Form::text('documento', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::text('celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>


<!-- Seccion de asignacion a concurso-->
<div class="form-group col-sm-12">
    <section class="content-header">
            <h1>
                Asignacion de concursos
            </h1>
    </section>
</div>

<!-- AsignacionConcurso - Concurso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('concurso_id', 'Concurso:') !!}
    {!! Form::select('concurso_id', $concursos  , null, ['id'=>'concursosAjaxSelect', 'class' => 'form-control' , 'placeholder' => 'Seleccione Concurso']) !!}
</div>

<!-- Seccion de asignacion a requisitos-->
<div class="form-group col-sm-12">
    <section class="content-header">
            <h1>
            Documentacion requerida
            </h1>
    </section>
</div>

<!-- AsignacionConcurso - Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('requisito_id', 'Requisito:') !!}
    {!! Form::select('requisito_id', $requisitos  , null, ['id'=>'requisitosAjaxSelect', 'class' => 'form-control' , 'placeholder' => 'Seleccione listado de requisitos']) !!}

    <ul id="requisitositemsList"></ul>
</div>






<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('mesaEntradas.index') !!}" class="btn btn-default">Cancel</a>
</div>
