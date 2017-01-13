<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Tipocargo",
 *      required={"cargo"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="cargo",
 *          description="cargo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="abreviatura",
 *          description="abreviatura",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="fk_tipoentidad",
 *          description="fk_tipoentidad",
 *          type="integer",
 *          format="int32"
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
class Tipocargo extends Model
{
    use SoftDeletes;

    public $table = 'tipocargos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'cargo',
        'abreviatura',
        'fk_tipoentidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cargo' => 'string',
        'abreviatura' => 'string',
        'fk_tipoentidad' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cargo' => 'required',
        'fk_tipoentidad' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function tipoentidad()
    {
        return $this->hasOne(\App\Models\Backend\Tipoentidad::class, 'fk_tipoentidad', 'id');
    }
}
