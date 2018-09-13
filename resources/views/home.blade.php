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

        <h3>{!! \App\Models\Concurso::pluck('referenciaGeneral','id')->count() !!}</h3>

        <p>Concursos</p>

      </div>
      <!-- inner -->

      <!-- icon -->
      <div class="icon">

        <i class="fa fa-trophy"></i>

      </div>
      <!-- icon -->

      <a href="{!! url('/concursos') !!}" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>

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

        <h3>{!! \App\Models\Postulante::all()->where('tipo',"=",'Postulante')->count() !!}</h3>

        <p>Postulantes</p>

      </div>
      <!-- inner -->

      <!-- icon -->
      <div class="icon">

        <i class="ion ion-stats-bars"></i>

      </div>
      <!-- icon -->

      <a href="{!! url('/postulantes') !!}" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>

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

        <h3>{!! \App\Models\User::pluck('name','id')->count() !!}</h3>

        <p>Usuarios</p>

      </div>
      <!-- inner -->

      <!-- icon -->
      <div class="icon">

        <i class="ion ion-person-add"></i>

      </div>
      <!-- icon -->

      <a href="{!! url('/users') !!}" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>

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

        <h3>{!! \App\Models\Jurado::all()->where('tipo',"=",'Jurado')->count() !!}</h3>

        <p>Jurados</p>

      </div>
      <!-- inner -->

      <!-- icon -->
      <div class="icon">

        <i class="ion ion-pie-graph"></i>

      </div>
      <!-- icon -->

      <a href="{!! url('/jurados') !!}" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>

    </div>
    <!-- small box -->

  </div>
  <!-- col -->

      </div>
      <!-- row -->

      <!-- row -->

  <!-- PRODUCT LIST -->

  <div class="row">
        <div class="col-md-6">
          <!-- Line chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Line Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="line-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="1024" height="600" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 512px; height: 300px;"></canvas>
                <div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                  <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;">
                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 98px; top: 283px; left: 22px; text-align: center;">0</div>
                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 98px; top: 283px; left: 93px; text-align: center;">2</div>
                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 98px; top: 283px; left: 164px; text-align: center;">4</div>
                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 98px; top: 283px; left: 235px; text-align: center;">6</div>
                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 98px; top: 283px; left: 306px; text-align: center;">8</div>
                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 98px; top: 283px; left: 374px; text-align: center;">10</div>
                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 98px; top: 283px; left: 445px; text-align: center;">12</div>
                  </div>
                  <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;">
                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 269px; left: 1px; text-align: right;">-1.5</div>
                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 224px; left: 1px; text-align: right;">-1.0</div>
                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 179px; left: 1px; text-align: right;">-0.5</div>
                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 135px; left: 5px; text-align: right;">0.0</div>
                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 90px; left: 5px; text-align: right;">0.5</div>
                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 45px; left: 5px; text-align: right;">1.0</div>
                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 5px; text-align: right;">1.5</div>
                  </div>
                </div>
                <canvas class="flot-overlay" width="1024" height="600" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 512px; height: 300px;"></canvas>
              </div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->

          <!-- Area chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Full Width Area Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="area-chart" style="height: 338px; padding: 0px; position: relative;" class="full-width-chart"><canvas class="flot-base" width="1100" height="676" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 550px; height: 338px;"></canvas><canvas class="flot-overlay" width="1100" height="676" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 550px; height: 338px;"></canvas></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <!-- Bar chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Bar Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="bar-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="1024" height="600" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 512px; height: 300px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 130px; top: 283px; left: 23px; text-align: center;">January</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 130px; top: 283px; left: 106px; text-align: center;">February</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 130px; top: 283px; left: 198px; text-align: center;">March</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 130px; top: 283px; left: 287px; text-align: center;">April</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 130px; top: 283px; left: 374px; text-align: center;">May</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 130px; top: 283px; left: 457px; text-align: center;">June</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 269px; left: 7px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 202px; left: 7px; text-align: right;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 135px; left: 1px; text-align: right;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 68px; left: 1px; text-align: right;">15</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 1px; text-align: right;">20</div></div></div><canvas class="flot-overlay" width="1024" height="600" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 512px; height: 300px;"></canvas></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->

          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Donut Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="donut-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="1024" height="600" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 512px; height: 300px;"></canvas><canvas class="flot-overlay" width="1024" height="600" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 512px; height: 300px;"></canvas><span class="pieLabel" id="pieLabel0" style="position: absolute; top: 70.5px; left: 314.602px;"><div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series2<br>30%</div></span><span class="pieLabel" id="pieLabel1" style="position: absolute; top: 210.5px; left: 292.602px;"><div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series3<br>20%</div></span><span class="pieLabel" id="pieLabel2" style="position: absolute; top: 129.5px; left: 133.602px;"><div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series4<br>50%</div></span></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>





        </div>

      </div>
      <!-- row -->

   </section>


@endsection
