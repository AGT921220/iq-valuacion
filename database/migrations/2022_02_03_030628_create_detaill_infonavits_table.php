<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetaillInfonavitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detaill_infonavits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('solicitante_nombre');
            $table->string('solicitante_ap');
            $table->string('solicitante_am');
            $table->string('solicitante_rfc');
            $table->string('solicitante_curp');
            $table->string('solicitante_nss');
            $table->string('solicitante_telefono');
            $table->string('solicitante_email');
            $table->string('solicitante_domicilio_calle');
            $table->string('solicitante_domicilio_numero');
            $table->string('solicitante_domicilio_interior');
            $table->string('solicitante_domicilio_colonia');
            $table->string('solicitante_domicilio_municipio');
            $table->string('solicitante_domicilio_estado');
            $table->string('solicitante_domicilio_cp');
            $table->string('vendedor_nombre');
            $table->string('vendedor_ap');
            $table->string('vendedor_am');
            $table->string('vendedor_rfc');
            $table->string('vendedor_curp');
            $table->string('vendedor_telefono');
            $table->string('vendedor_email');
            $table->string('vendedor_domicilio_calle');
            $table->string('vendedor_domicilio_numero');
            $table->string('vendedor_domicilio_interior');
            $table->string('vendedor_domicilio_colonia');
            $table->string('vendedor_domicilio_municipio');
            $table->string('vendedor_domicilio_estado');
            $table->string('vendedor_domicilio_cp');
            $table->string('vivienda_cuv');
            $table->string('vivienda_cuenta_predial');
            $table->string('vivienda_calle');
            $table->string('vivienda_numero');
            $table->string('vivienda_interior');
            $table->string('vivienda_colonia');
            $table->string('calles_referencia')->nullable();
            $table->string('calle_uno')->nullable();
            $table->string('calle_dos')->nullable();
            $table->string('vivienda_municipio');
            $table->string('vivienda_estado');
            $table->string('vivienda_cp');
            $table->string('vivienda_manzana');
            $table->string('vivienda_lote');
            $table->string('vivienda_condominio');
            $table->string('vivienda_edificio')->nullable();
            $table->string('vivienda_nivel')->nullable();
            $table->string('vivienda_entrada')->nullable();
            $table->string('escritura_nombre_notario');
            $table->string('escritura_notario_numero');
            $table->string('escritura_notario_distrito');
            $table->string('escritura_escritura');
            $table->string('escritura_volumen');
            $table->string('escritura_folio_real');
            $table->string('escritura_insc');
            $table->string('escritura_folio');
            $table->string('escritura_libro');
            $table->string('confirmacion_visita_nombre');
            $table->string('confirmacion_visita_celular');
            $table->string('confirmacion_visita_correo');
            $table->integer('user_id')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detaill_infonavits');
    }
}
