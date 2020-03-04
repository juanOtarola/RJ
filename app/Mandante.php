<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mandante extends Model
{
    protected $fillable = [
        'nombre','correo','cargo','empresa','rut','pais_region','estado_provincia','ciudad',
        'direccion','telefono','telefono2','fax','web','notas'
    ];
}
