<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipocargosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipocargos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cargo');
            $table->string('abreviatura');
            $table->integer('fk_tipoentidad')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('fk_tipoentidad')->references('id')->on('tipoentidads');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tipocargos');
    }
}
