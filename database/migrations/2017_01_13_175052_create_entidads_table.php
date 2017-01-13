<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEntidadsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('entidad');
            $table->string('abreviatura', 30);
            $table->string('tipoentidad');
            $table->string('tipofuncional');
            $table->string('nivel');
            $table->string('cif', 12);
            $table->string('telefonoprincipal');
            $table->string('descripcion_telprincipal');
            $table->string('emailprincipal');
            $table->string('descripcion_emailprincipal');
            $table->string('responsable');
            $table->string('municipio');
            $table->string('calle');
            $table->string('ine_via');
            $table->string('numero');
            $table->string('piso');
            $table->string('puerta');
            $table->string('escalera');
            $table->string('tipo_coordenadas');
            $table->string('lon');
            $table->string('lat');
            $table->string('x');
            $table->string('y');
            $table->string('comentarios');
            $table->string('created_by');
            $table->string('updated_by');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('entidads');
    }
}
