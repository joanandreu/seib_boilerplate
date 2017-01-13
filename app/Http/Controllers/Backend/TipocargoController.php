<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateTipocargoRequest;
use App\Http\Requests\Backend\UpdateTipocargoRequest;
use App\Repositories\Backend\TipocargoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Backend\Tipoentidad;

class TipocargoController extends AppBaseController
{
    /** @var  TipocargoRepository */
    private $tipocargoRepository;

    public function __construct(TipocargoRepository $tipocargoRepo)
    {
        $this->tipocargoRepository = $tipocargoRepo;
    }

    /**
     * Display a listing of the Tipocargo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipocargoRepository->pushCriteria(new RequestCriteria($request));
        $tipocargos = $this->tipocargoRepository->all();
        $tipoentidads = Tipoentidad::pluck('tipo', 'id');
        
        return view('backend.tipocargos.index', compact('tipoentidads'))
            ->with('tipocargos', $tipocargos);
    }

    /**
     * Show the form for creating a new Tipocargo.
     *
     * @return Response
     */
    public function create()
    {

      $tipoentidads = Tipoentidad::pluck('tipo', 'id');
      

        return view('backend.tipocargos.create', compact('tipoentidads'));
    }

    /**
     * Store a newly created Tipocargo in storage.
     *
     * @param CreateTipocargoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipocargoRequest $request)
    {
        $input = $request->all();

        $tipocargo = $this->tipocargoRepository->create($input);

        Flash::success('Tipocargo saved successfully.');

        return redirect(route('backend.tipocargos.index'));
    }

    /**
     * Display the specified Tipocargo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipocargo = $this->tipocargoRepository->findWithoutFail($id);
         $tipoentidads = Tipoentidad::pluck('tipo', 'id');
        if (empty($tipocargo)) {
            Flash::error('Tipocargo not found');

            return redirect(route('backend.tipocargos.index'));
        }

        return view('backend.tipocargos.show', compact('tipoentidads'))->with('tipocargo', $tipocargo);
    }

    /**
     * Show the form for editing the specified Tipocargo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipocargo = $this->tipocargoRepository->findWithoutFail($id);

        if (empty($tipocargo)) {
            Flash::error('Tipocargo not found');

            return redirect(route('backend.tipocargos.index'));
        }
        $tipoentidads = Tipoentidad::pluck('tipo', 'id');

        return view('backend.tipocargos.edit', compact('tipoentidads'))->with('tipocargo', $tipocargo);
    }

    /**
     * Update the specified Tipocargo in storage.
     *
     * @param  int              $id
     * @param UpdateTipocargoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipocargoRequest $request)
    {
        $tipocargo = $this->tipocargoRepository->findWithoutFail($id);

        if (empty($tipocargo)) {
            Flash::error('Tipocargo not found');

            return redirect(route('backend.tipocargos.index'));
        }

        $tipocargo = $this->tipocargoRepository->update($request->all(), $id);

        Flash::success('Tipocargo updated successfully.');

        return redirect(route('backend.tipocargos.index'));
    }

    /**
     * Remove the specified Tipocargo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipocargo = $this->tipocargoRepository->findWithoutFail($id);

        if (empty($tipocargo)) {
            Flash::error('Tipocargo not found');

            return redirect(route('backend.tipocargos.index'));
        }

        $this->tipocargoRepository->delete($id);

        Flash::success('Tipocargo deleted successfully.');

        return redirect(route('backend.tipocargos.index'));
    }
}
