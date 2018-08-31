@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Log
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($log, ['route' => ['logs.update', $log->id], 'method' => 'patch']) !!}

                        @include('logs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection