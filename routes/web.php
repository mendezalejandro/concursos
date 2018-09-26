<?php

use Illuminate\Support\Facades\Input;
use App\Models\Concurso;
use App\Models\Requisito;
use App\Models\RequisitoItem;

Route::get('/', function () {
  return redirect('login');
});
Route::get('/calendario', function () {
  return view('calendario.calendario');
});
/***      Excepciones       ***/
Route::get('errors/500', function(){
  return view('errors.500');
});
Route::get('errors/404', function(){
  return view('errors.404');
  //abort(404);
});
Route::get('/reportes', function () {
  return view('reportes.reportes');
});

/*----------------Jorge Gamez------------------*/
//cambia de estado a un concurso
Route::get('/abierto/{id}','ConcursoController@abierto');
Route::get('/cerrado/{id}','ConcursoController@cerrado');
Route::get('/impugnado/{id}','ConcursoController@impugnado');
Route::get('/vacante/{id}','ConcursoController@vacante');
// Email related routes
Route::get('mail/send/{id}', 'MailController@send');
/*----------------------------------------------------*/

Route::get('/ajax-concursos', function(){
  $concursoid = Input::get('concursoid');
  $concurso = Concurso::where('id', '=',$concursoid)->first();

  $requisitos = Requisito::where('categoria_id',"=",$concurso->categoria_id)
                          ->where('perfil_id',"=",$concurso->perfil_id)
                          ->where('dedicacion',"=",$concurso->dedicacion)
                          ->get()
  ;
  return Response::json($requisitos);
});

Route::get('/ajax-requisitos', function(){
  $requisitoid = Input::get('requisitoid');
  $requisitositems = RequisitoItem::where('requisito_id', '=',$requisitoid)->get();

  //return Response::json($requisitositems);
});

Route::middleware(['Administrador' , 'Administrativo' ])->group(function () {

  Route::get('/home', 'HomeController@index');

  Route::resource('/calendario', 'CalendarioController');

  Route::resource('areas', 'AreaController');

  Route::resource('asignaturas', 'AsignaturaController');

  Route::resource('cargoConcursados', 'CargoConcursadoController');

  Route::resource('carreras', 'CarreraController');

  Route::resource('categorias', 'CategoriaController');

  Route::resource('concursos', 'ConcursoController');

  Route::resource('concursoJurados', 'ConcursoJuradoController');

  Route::resource('concursoPostulantes', 'ConcursoPostulanteController');

  Route::resource('institutos', 'InstitutoController');

  Route::resource('jurados', 'JuradoController');

  Route::resource('llamados', 'LlamadoController');

  Route::resource('logs', 'LogController');

  Route::resource('llamadoConcursos', 'LlamadoConcursosController');

  Route::resource('perfiles', 'PerfilesController');

  Route::resource('postulantes', 'PostulanteController');

  Route::resource('mesaEntradas', 'MesaEntradaController');

  Route::resource('requisitos', 'RequisitoController');

  Route::resource('requisitoItems', 'RequisitoItemController');

  Route::resource('requisitoPostulantes', 'RequisitoPostulanteController');

  Route::resource('universidads', 'UniversidadController');

  Route::resource('users', 'UserController');

});

Route::middleware(['Miembro'])->group(function () {

  Route::get('/home', 'HomeController@index');

  Route::resource('/calendario', 'CalendarioController');

  Route::resource('areas', 'AreaController', ['except' => ['edit', 'create', 'store', 'update', 'destroy'] ]);

  Route::resource('asignaturas', 'AsignaturaController', ['except' => ['edit', 'create', 'store', 'update', 'destroy'] ]);

  Route::resource('cargoConcursados', 'CargoConcursadoController', ['except' => ['edit', 'create', 'store', 'update', 'destroy'] ]);

  Route::resource('carreras', 'CarreraController', ['except' => ['edit', 'create', 'store', 'update', 'destroy'] ]);

  Route::resource('categorias', 'CategoriaController', ['except' => ['edit', 'create', 'store', 'update', 'destroy'] ]);

  Route::resource('concursos', 'ConcursoController', ['except' => ['edit', 'create', 'store', 'update', 'destroy'] ]);

  Route::resource('concursoJurados', 'ConcursoJuradoController', ['except' => ['edit', 'create', 'store', 'update', 'destroy'] ]);

  Route::resource('concursoPostulantes', 'ConcursoPostulanteController', ['except' => ['edit', 'create', 'store', 'update', 'destroy'] ]);

  Route::resource('institutos', 'InstitutoController', ['except' => ['edit', 'create', 'store', 'update', 'destroy'] ]);

  Route::resource('jurados', 'JuradoController', ['except' => ['edit', 'create', 'store', 'update', 'destroy'] ]);

  Route::resource('llamados', 'LlamadoController', ['except' => ['edit', 'create', 'store', 'update', 'destroy'] ]);

  Route::resource('logs', 'LogController', ['except' => ['edit', 'create', 'store', 'update', 'destroy'] ]);

  Route::resource('llamadoConcursos', 'LlamadoConcursosController', ['except' => ['edit', 'create', 'store', 'update', 'destroy'] ]);

  Route::resource('perfiles', 'PerfilesController', ['except' => ['edit', 'create', 'store', 'update', 'destroy'] ]);

  Route::resource('postulantes', 'PostulanteController', ['except' => ['edit', 'create', 'store', 'update', 'destroy'] ]);

  Route::resource('mesaEntradas', 'MesaEntradaController');

  Route::resource('requisitos', 'RequisitoController', ['except' => ['edit', 'create', 'store', 'update', 'destroy'] ]);

  Route::resource('requisitoItems', 'RequisitoItemController', ['except' => ['edit', 'create', 'store', 'update', 'destroy'] ]);

  Route::resource('requisitoPostulantes', 'RequisitoPostulanteController', ['except' => ['edit', 'create', 'store', 'update', 'destroy'] ]);

  Route::resource('universidads', 'UniversidadController', ['except' => ['edit', 'create', 'store', 'update', 'destroy'] ]);

  //Route::resource('users', 'UserController' );


});

Auth::routes();


  Route::get('/home', 'HomeController@index');

  Route::resource('/calendario', 'CalendarioController');

  Route::resource('areas', 'AreaController');

  Route::resource('asignaturas', 'AsignaturaController');

  Route::resource('cargoConcursados', 'CargoConcursadoController');

  Route::resource('carreras', 'CarreraController');

  Route::resource('categorias', 'CategoriaController');

  Route::resource('concursos', 'ConcursoController');

  Route::resource('concursoJurados', 'ConcursoJuradoController');

  Route::resource('concursoPostulantes', 'ConcursoPostulanteController');

  Route::resource('institutos', 'InstitutoController');

  Route::resource('jurados', 'JuradoController');

  Route::resource('llamados', 'LlamadoController');

  Route::resource('logs', 'LogController');

  Route::resource('llamadoConcursos', 'LlamadoConcursosController');

  Route::resource('perfiles', 'PerfilesController');

  Route::resource('postulantes', 'PostulanteController');

  Route::resource('mesaEntradas', 'MesaEntradaController');

  Route::resource('requisitos', 'RequisitoController');

  Route::resource('requisitoItems', 'RequisitoItemController');

  Route::resource('requisitoPostulantes', 'RequisitoPostulanteController');

  Route::resource('universidads', 'UniversidadController');

  Route::resource('users', 'UserController');
