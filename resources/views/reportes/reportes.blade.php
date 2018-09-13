@extends('layouts.app')

@section('content')
<section class="content">

    <!-- row -->
    <div class="row">


<!--=====================================
CAJAS SUPERIORES
======================================-->

<!-- col -->
<div class="col-lg-3 col-xs-6">

  <!-- small box -->
  <div class="small-box bg-aqua">

    <!-- inner -->
    <div class="inner">

      <h3>@php echo \App\Models\Concurso::pluck('referenciaGeneral','id')->count() @endphp</h3>

      <p>Concursos</p>

    </div>
    <!-- inner -->

    <!-- icon -->
    <div class="icon">

      <i class="fa fa-trophy text-red"></i>

    </div>
    <!-- icon -->

    <a href="ventas" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>

  </div>
  <!-- small-box -->

</div>
<!-- col -->

<!--===========================================================================-->

<!-- col -->
<div class="col-lg-3 col-xs-6">

  <!-- small box -->
  <div class="small-box bg-green">

    <!-- inner -->
    <div class="inner">

      <h3>12,794</h3>

      <p>Visitas</p>

    </div>
    <!-- inner -->

    <!-- icon -->
    <div class="icon">

      <i class="ion ion-stats-bars"></i>

    </div>
    <!-- icon -->

    <a href="visitas" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>

  </div>
  <!-- small box -->

</div>
<!-- col -->

<!--===========================================================================-->

<!-- col -->
<div class="col-lg-3 col-xs-6">

  <!-- small box -->
  <div class="small-box bg-yellow">

    <!-- inner -->
    <div class="inner">

      <h3>3</h3>

      <p>Usuarios</p>

    </div>
    <!-- inner -->

    <!-- icon -->
    <div class="icon">

      <i class="ion ion-person-add"></i>

    </div>
    <!-- icon -->

    <a href="usuarios" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>

  </div>
  <!-- small box -->

</div>
<!-- col -->

<!--===========================================================================-->

<!-- col -->
<div class="col-lg-3 col-xs-6">

  <!-- small box -->
  <div class="small-box bg-red">

    <!-- inner -->
    <div class="inner">

      <h3>24</h3>

      <p>Productos</p>

    </div>
    <!-- inner -->

    <!-- icon -->
    <div class="icon">

      <i class="ion ion-pie-graph"></i>

    </div>
    <!-- icon -->

    <a href="productos" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>

  </div>
  <!-- small box -->

</div>
<!-- col -->

    </div>
    <!-- row -->

    <!-- row -->

<!-- PRODUCT LIST -->
      </div>

    </div>
    <!-- row -->

 </section>
@endsection
