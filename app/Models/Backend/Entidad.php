<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Entidad",
 *      required={"entidad", "abreviatura", "tipoentidad", "tipofuncional", "cif", "telefonoprincipal", "emailprincipal"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="entidad",
 *          description="entidad",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="abreviatura",
 *          description="abreviatura",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tipoentidad",
 *          description="tipoentidad",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tipofuncional",
 *          description="tipofuncional",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nivel",
 *          description="nivel",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cif",
 *          description="cif",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="telefonoprincipal",
 *          description="telefonoprincipal",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="descripcion_telprincipal",
 *          description="descripcion_telprincipal",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="emailprincipal",
 *          description="emailprincipal",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="descripcion_emailprincipal",
 *          description="descripcion_emailprincipal",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="responsable",
 *          description="responsable",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="municipio",
 *          description="municipio",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="calle",
 *          description="calle",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="ine_via",
 *          description="ine_via",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="numero",
 *          description="numero",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="piso",
 *          description="piso",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="puerta",
 *          description="puerta",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="escalera",
 *          description="escalera",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tipo_coordenadas",
 *          description="tipo_coordenadas",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="lon",
 *          description="lon",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="lat",
 *          description="lat",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="x",
 *          description="x",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="y",
 *          description="y",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="comentarios",
 *          description="comentarios",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_by",
 *          description="created_by",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="updated_by",
 *          description="updated_by",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Entidad extends Model
{
    use SoftDeletes;

    public $table = 'entidads';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'entidad' => 'string',
        'abreviatura' => 'string',
        'tipoentidad' => 'string',
        'tipofuncional' => 'string',
        'nivel' => 'string',
        'cif' => 'string',
        'telefonoprincipal' => 'string',
        'descripcion_telprincipal' => 'string',
        'emailprincipal' => 'string',
        'descripcion_emailprincipal' => 'string',
        'responsable' => 'string',
        'municipio' => 'string',
        'calle' => 'string',
        'ine_via' => 'string',
        'numero' => 'string',
        'piso' => 'string',
        'puerta' => 'string',
        'escalera' => 'string',
        'tipo_coordenadas' => 'string',
        'lon' => 'string',
        'lat' => 'string',
        'x' => 'string',
        'y' => 'string',
        'comentarios' => 'string',
        'created_by' => 'string',
        'updated_by' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'entidad' => 'required',
        'abreviatura' => 'required',
        'tipoentidad' => 'required',
        'tipofuncional' => 'required',
        'cif' => 'required',
        'telefonoprincipal' => 'required',
        'emailprincipal' => 'required',

    ];

    
}
