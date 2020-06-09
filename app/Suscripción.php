<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscripción extends Model
{
	protected $table='suscripciones';
    protected $fillable = ['servicio_id', 'suscriptor_id', 'fecha_insc'];
}
