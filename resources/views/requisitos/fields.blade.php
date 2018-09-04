<!-- Categoria Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoria_id', 'Categoria Id:') !!}
    {!! Form::select('categoria_id', $categorias , null, ['class' => 'form-control']) !!}
</div>

<!-- Perfil Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('perfil_id', 'Perfil Id:') !!}
    {!! Form::select('perfil_id', $perfiles , null, ['class' => 'form-control']) !!}
</div>

<!-- Dedicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dedicacion', 'Dedicacion:') !!}
    {!! Form::select('dedicacion', $dedicaciones ,  null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('requisitos.index') !!}" class="btn btn-default">Cancel</a>
</div>
