<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfonavitDetail extends Model
{
    protected $fillable = [
        'solicitante_nombre',
        'solicitante_ap',
        'solicitante_am',
        'solicitante_rfc',
        'solicitante_curp',
        'solicitante_nss',
        'solicitante_telefono',
        'solicitante_email',
        'solicitante_domicilio_calle',
        'solicitante_domicilio_numero',
        'solicitante_domicilio_interior',
        'solicitante_domicilio_colonia',
        'solicitante_domicilio_municipio',
        'solicitante_domicilio_estado',
        'solicitante_domicilio_cp',
        'vendedor_nombre',
        'vendedor_ap',
        'vendedor_am',
        'vendedor_rfc',
        'vendedor_curp',
        'vendedor_nss',
        'vendedor_telefono',
        'vendedor_email',
        'vendedor_domicilio_calle',
        'vendedor_domicilio_numero',
        'vendedor_domicilio_interior',
        'vendedor_domicilio_colonia',
        'vendedor_domicilio_municipio',
        'vendedor_domicilio_estado',
        'vendedor_domicilio_cp',
        'vivienda_cuv',
        'vivienda_cuenta_predial',
        'vivienda_calle',
        'vivienda_numero',
        'vivienda_interior',
        'vivienda_colonia',
        'calles_referencia',
        'calle_uno',
        'calle_dos',
        'vivienda_municipio',
        'vivienda_estado',
        'vivienda_cp',
        'vivienda_manzana',
        'vivienda_lote',
        'vivienda_condominio',
        'vivienda_edificio',
        'vivienda_nivel',
       'vivienda_entrada',
        'escritura_nombre_notario',
       'escritura_notario_numero',
        'escritura_notario_distrito',
        'escritura_escritura',
        'escritura_volumen',
        'escritura_folio_real',
        'escritura_insc',
        'escritura_folio',
        'escritura_libro',
        'confirmacion_visita_nombre',
        'confirmacion_visita_celular',
        'confirmacion_visita_correo',
        'user_id'
    ];
}
