<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Entidad;
use InfyOm\Generator\Common\BaseRepository;

class EntidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'entidad',
        'abreviatura',
        'tipoentidad',
        'tipofuncional',
        'nivel',
        'cif',
        'telefonoprincipal',
        'descripcion_telprincipal',
        'emailprincipal',
        'descripcion_emailprincipal',
        'responsable',
        'municipio',
        'calle',
        'ine_via',
        'numero',
        'piso',
        'puerta',
        'escalera',
        'tipo_coordenadas',
        'lon',
        'lat',
        'x',
        'y',
        'comentarios',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Entidad::class;
    }
}
