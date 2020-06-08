<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscripción extends Model
{
    protected $fillable = ['servicio_id', 'suscriptor_id'];
}
