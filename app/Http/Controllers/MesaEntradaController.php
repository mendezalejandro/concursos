<?php

namespace App\Http\Controllers;

use App\DataTables\MesaEntradaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateMesaEntradaRequest;
use App\Http\Requests\UpdateMesaEntradaRequest;
use App\Repositories\MesaEntradaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use App\Models\Concurso;
use App\Models\Requisito;
use Response;

class MesaEntradaController extends AppBaseController
{
    /** @var  MesaEntradaRepository */
    private $mesaEntradasRepository;

    public function __construct(MesaEntradaRepository $mesaEntradasRepo)
    {
        $this->mesaEntradasRepository = $mesaEntradasRepo;
    }

    /**
     * Display a listing of the Postulante.
     *
     * @param mesaentradaDataTable $mesaentradaDataTable
     * @return Response
     */
    public function index(MesaEntradaDataTable $mesaentradaDataTable)
    {
        return $mesaentradaDataTable->render('mesaentradas.index');
    }

    /**
     * Show the form for creating a new Postulante.
     *
     * @return Response
     */
    public function create()
    {
        $concursos = Concurso::all();
        $concurso = $concursos->first();

        $concursos = $concursos->pluck('referenciaGeneral' , 'id');

        $requisitos = Requisito::where('categoria_id',"=",$concurso->categoria_id)
        ->where('perfil_id',"=",$concurso->perfil_id)
        ->where('dedicacion',"=",$concurso->dedicacion)
        ->pluck('descripcion' , 'id');
        
        return view('mesaentradas.create' , compact('concursos', 'requisitos'));
    }

    /**
     * Store a newly created Postulante in storage.
     *
     * @param CreatePostulanteRequest $request
     *
     * @return Response
     */
    public function store(CreateMesaEntradaRequest $request)
    {
        $input = $request->all();
        $input['tipo'] = '1';
        $mesaentrada = $this->mesaEntradasRepository->create($input);

        Flash::success('Postulante saved successfully.');

        return redirect(route('mesaEntradas.index'));
    }

    /**
     * Display the specified Postulante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mesaentrada = $this->mesaEntradasRepository->findWithoutFail($id);

        if (empty($mesaentrada)) {
            Flash::error('Postulante not found');

            return redirect(route('mesaEntradas.index'));
        }

        return view('mesaentradas.show')->with('mesaentrada', $mesaentrada);
    }

    /**
     * Show the form for editing the specified Postulante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mesaentrada = $this->mesaEntradasRepository->findWithoutFail($id);

        if (empty($mesaentrada)) {
            Flash::error('Postulante not found');

            return redirect(route('mesaEntradas.index'));
        }

        return view('mesaentradas.edit')->with('mesaentrada', $mesaentrada);
    }

    /**
     * Update the specified Postulante in storage.
     *
     * @param  int              $id
     * @param UpdatePostulanteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMesaEntradaRequest $request)
    {
        $mesaentrada = $this->mesaEntradasRepository->findWithoutFail($id);

        if (empty($mesaentrada)) {
            Flash::error('Postulante not found');

            return redirect(route('mesaEntradas.index'));
        }

        $mesaentrada = $this->mesaEntradasRepository->update($request->all(), $id);

        Flash::success('Postulante updated successfully.');

        return redirect(route('mesaEntradas.index'));
    }

    /**
     * Remove the specified Postulante from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mesaentrada = $this->mesaEntradasRepository->findWithoutFail($id);

        if (empty($mesaentrada)) {
            Flash::error('Postulante not found');

            return redirect(route('mesaEntradas.index'));
        }

        $this->mesaEntradasRepository->delete($id);

        Flash::success('Postulante deleted successfully.');

        return redirect(route('mesaEntradas.index'));
    }
}
