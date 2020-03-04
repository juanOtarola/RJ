<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
	  protected $fillable = ['nombre','marca','tipo','valor','descripcion'
    ];
}
