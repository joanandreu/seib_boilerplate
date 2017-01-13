<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Tipoentidad;
use InfyOm\Generator\Common\BaseRepository;

class TipoentidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo',
        'abreviatura',
        'tipofuncional',
        'tipopadre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tipoentidad::class;
    }
}
