<!-- Asignatura Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('asignatura_id', 'ASIGNATURA') !!}
       <span class="text-danger"> (*)  </span>
    {!! Form::select ('asignatura_id', $asignaturas, null, ['class' => 'form-control' , 'placeholder' => 'Seleccione Asignatura']) !!}
</div>

<!-- Perfil Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('perfil_id', 'PERFIL') !!}
       <span class="text-danger"> (*)  </span>
    {!! Form::select('perfil_id', $perfiles , null, ['class' => 'form-control', 'placeholder' => 'Seleccione Perfil']) !!}
</div>

<!-- Categoria Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoria_id', 'CATEGORIA') !!}
    {!! Form::select('categoria_id', $categorias , null, ['class' => 'form-control', 'placeholder' => 'Seleccione Categoria']) !!}
</div>

<!-- Referenciageneral Field -->
<div class="form-group col-sm-6">
    {!! Form::label('referenciaGeneral', 'REFERENCIA GENERAL') !!}
       <span class="text-danger"> (*)  </span>
    {!! Form::text('referenciaGeneral', null, ['class' => 'form-control']) !!}
</div>

<!-- Referenciainstituto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('referenciaInstituto', 'REFERENCIA INSTITUTO') !!}
    {!! Form::text('referenciaInstituto', null, ['class' => 'form-control']) !!}
</div>

<!-- Cargos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cargos', 'CARGOS') !!}
    {!! Form::text('cargos', null, ['class' => 'form-control']) !!}
    </label>
</div>

<!-- Lineadesarrollo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lineaDesarrollo', 'LINEA DE DESARROLLO') !!}
    {!! Form::text('lineaDesarrollo', null, ['class' => 'form-control']) !!}
</div>

<!-- Requisitos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('requisitos', 'REQUISITOS') !!}
    {!! Form::text('requisitos', null, ['class' => 'form-control']) !!}
</div>

<!-- Expediente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expediente', 'EXPEDIENTE') !!}
    {!! Form::text('expediente', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechasustanciacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaSustanciacion', 'FECHA DE SUSTANCIACION') !!}
    {!! Form::date('fechaSustanciacion', null, ['class' => 'form-control']) !!}

</div>

<!-- Usuariosustanciacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuarioSustanciacion', 'USUARIOS SUSTANCIACION') !!}
    {!! Form::select('usuarioSustanciacion', $usuarios , null, ['class' => 'form-control' , 'placeholder' => 'Seleccione Usuario']) !!}
</div>

<!-- Usuariocierre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuarioCierre', 'USUARIO CIERRE') !!}
    {!! Form::select('usuarioCierre',$usuarios , null, ['class' => 'form-control', 'placeholder' => 'Seleccione Usuario']) !!}
</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observaciones', 'OBSERVACIONES') !!}
    {!! Form::text('observaciones', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechainicio Field -->
<div class="form-group col-sm-6">

    {!! Form::label('fechaInicio', 'FECHA DE INICIO') !!}
       <span class="text-danger"> (*)  </span>
    {!! Form::date('fechaInicio', null, ['class' => 'form-control']) !!}

</div>

<!-- Fechafin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaFin', 'FECHA DE FIN') !!}
       <span class="text-danger"> (*)  </span>
    {!! Form::date('fechaFin', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'ESTADO') !!}
       <span class="text-danger"> (*)  </span>
    {!! Form::select('estado', $estado , null, ['class' => 'form-control' , 'placeholder'=>'Seleccione Estado del Concurso']) !!}
</div>

<!-- Dedicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dedicacion', 'DEDICACION') !!}
    {!! Form::select('dedicacion', $dedicaciones , null, ['class' => 'form-control' , 'placeholder' => 'Seleccione Dedicacion']) !!}
</div>

<!-- Dictamen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dictamen', 'DICTAMEN') !!}
    {!! Form::text('dictamen', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('concursos.index') !!}" class="btn btn-default">Cancel</a>
</div>
