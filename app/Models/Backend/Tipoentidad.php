<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Nestable\NestableTrait;
/**
 * @SWG\Definition(
 *      definition="Tipoentidad",
 *      required={"tipo"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="tipo",
 *          description="tipo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="abreviatura",
 *          description="abreviatura",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tipofuncional",
 *          description="tipofuncional",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tipopadre",
 *          description="tipopadre",
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
class Tipoentidad extends Model
{
    use SoftDeletes;
    use NestableTrait;
    public $table = 'tipoentidads';
    

    protected $dates = ['deleted_at'];
    protected $parent = 'tipopadre';

    public $fillable = [
        'tipo',
        'abreviatura',
        'tipofuncional',
        'tipopadre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tipo' => 'string',
        'abreviatura' => 'string',
        'tipofuncional' => 'string',
        'tipopadre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipo' => 'required'
    ];

    
}
