<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateTipoentidadRequest;
use App\Http\Requests\Backend\UpdateTipoentidadRequest;
use App\Repositories\Backend\TipoentidadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Backend\Tipoentidad;

class TipoentidadController extends AppBaseController
{
    /** @var  TipoentidadRepository */
    private $tipoentidadRepository;

    public function __construct(TipoentidadRepository $tipoentidadRepo)
    {
        $this->tipoentidadRepository = $tipoentidadRepo;
    }

    /**
     * Display a listing of the Tipoentidad.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoentidadRepository->pushCriteria(new RequestCriteria($request));
        $tipoentidads = $this->tipoentidadRepository->all();

        return view('backend.tipoentidads.index')
            ->with('tipoentidads', $tipoentidads);
    }

    /**
     * Show the form for creating a new Tipoentidad.
     *
     * @return Response
     */
    public function create()
    {
          $tipoentidadspadre = Tipoentidad::pluck('tipo', 'id');
        
        return view('backend.tipoentidads.create', compact('tipoentidadspadre'));
    }

    /**
     * Store a newly created Tipoentidad in storage.
     *
     * @param CreateTipoentidadRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoentidadRequest $request)
    {
        $input = $request->all();

        $tipoentidad = $this->tipoentidadRepository->create($input);

        Flash::success('Tipoentidad saved successfully.');

        return redirect(route('backend.tipoentidads.index'));
    }

    /**
     * Display the specified Tipoentidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoentidad = $this->tipoentidadRepository->findWithoutFail($id);
        $tipoentidadspadre = Tipoentidad::pluck('tipo', 'id');
        if (empty($tipoentidad)) {
            Flash::error('Tipoentidad not found');

            return redirect(route('backend.tipoentidads.index'));
        }

        return view('backend.tipoentidads.show', compact('tipoentidadspadre'))->with('tipoentidad', $tipoentidad);
    }

    /**
     * Show the form for editing the specified Tipoentidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoentidad = $this->tipoentidadRepository->findWithoutFail($id);
        $tipoentidadspadre = Tipoentidad::pluck('tipo', 'id');
        if (empty($tipoentidad)) {
            Flash::error('Tipoentidad not found');

            return redirect(route('backend.tipoentidads.index'));
        }

        return view('backend.tipoentidads.edit', compact('tipoentidadspadre'))->with('tipoentidad', $tipoentidad);
    }

    /**
     * Update the specified Tipoentidad in storage.
     *
     * @param  int              $id
     * @param UpdateTipoentidadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoentidadRequest $request)
    {
        $tipoentidad = $this->tipoentidadRepository->findWithoutFail($id);

        if (empty($tipoentidad)) {
            Flash::error('Tipoentidad not found');

            return redirect(route('backend.tipoentidads.index'));
        }

        $tipoentidad = $this->tipoentidadRepository->update($request->all(), $id);

        Flash::success('Tipoentidad updated successfully.');

        return redirect(route('backend.tipoentidads.index'));
    }

    /**
     * Remove the specified Tipoentidad from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoentidad = $this->tipoentidadRepository->findWithoutFail($id);

        if (empty($tipoentidad)) {
            Flash::error('Tipoentidad not found');

            return redirect(route('backend.tipoentidads.index'));
        }

        $this->tipoentidadRepository->delete($id);

        Flash::success('Tipoentidad deleted successfully.');

        return redirect(route('backend.tipoentidads.index'));
    }
}
