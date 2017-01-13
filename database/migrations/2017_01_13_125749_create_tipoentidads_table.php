<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoentidadsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipoentidads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->string('abreviatura');
            $table->text('tipofuncional');
            $table->string('tipopadre');
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
        Schema::drop('tipoentidads');
    }
}
