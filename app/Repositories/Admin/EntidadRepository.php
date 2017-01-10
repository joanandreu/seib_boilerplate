<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Entidad;
use InfyOm\Generator\Common\BaseRepository;

class EntidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Entidad::class;
    }
}
