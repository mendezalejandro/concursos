@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mesa de entradas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mesaEntradas, ['route' => ['mesaEntradas.update', $mesaEntradas->id], 'method' => 'patch']) !!}

                        @include('mesaentradas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection