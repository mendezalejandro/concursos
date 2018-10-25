<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concurso;
use App\Models\ConcursoPostulante;
use App\Models\ConcursoJurado;
use App\Models\Postulante;
use App\Models\Jurado;
use App\Models\Llamado;


class ReporteController extends Controller

{

public function __construct(){
    $this->middleware('auth');
}
public function index(){
  $AspirantesporConcurso = $this->AspirantesporConcurso();
  $JuradosporConcurso = $this->JuradosporConcurso();

  return view('reportes.reportes')->with(compact('AspirantesporConcurso' , 'JuradosporConcurso'));
}
public function AspirantesporConcurso(){
  $AspirantesporConcurso =
  ConcursoPostulante::join('concursos' , 'concursospostulantes.concurso_id' , '=' , 'concursos.id')
  ->join('personas' , 'concursospostulantes.postulante_id' , '=' , 'personas.id')
  ->where('personas.tipo','Postulante')
  ->select('concursospostulantes.id','concursos.referenciaGeneral as ref_gen' ,
           'personas.nombres as pos_nom' ,  'personas.apellidos  as pos_ape' ,
           'concursospostulantes.fechaPresentacion as fec_pre' ,
           'concursospostulantes.tipo as tip_pos',
           'concursospostulantes.ordenMerito as ord_mer' )
  ->get();

  return $AspirantesporConcurso;
}
public function JuradosporConcurso(){
  $JuradosporConcurso =
  ConcursoJurado::join('concursos' , 'concursosjurados.concurso_id' , '=' , 'concursos.id')
  ->join('personas' , 'concursosjurados.jurado_id' , '=' , 'personas.id')
  ->where('personas.tipo' , '=', 'Jurado')
  ->join('categorias' , 'concursosjurados.categoria_id' , '=' , 'categorias.id')
  ->select('concursosjurados.id',
           'concursos.referenciaGeneral as ref_gen' ,
           'personas.nombres as jur_nom' ,
           'personas.apellidos  as jur_ape' ,
           'categorias.nombre as jur_cat' ,
           'concursosjurados.nivel as con_niv' ,
             'concursosjurados.tipo as tip_jur')
 ->get();

 return $JuradosporConcurso;
}
public function Concursospendientesdesustanciaciónporllamado(){}
public function ConcursosCerradosporllamado(){}
public function ConcursosDesiertosdesdeConvocatoriaporllamado(){}
public function ConcursosDesiertosenSustanciaciónporllamado(){}
public function ConcursosNulosporllamado(){}

}
