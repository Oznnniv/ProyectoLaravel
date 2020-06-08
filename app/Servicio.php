<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servicio extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];
	protected $fillable = ['nombre', 'desc', 'precio', 'recargo', 'img1', 'img2', 'img3'];
	public $timestamps = false;
	public function suscriptor()
    {
        return $this->belongsToMany(Suscriptor::class)->withTimestamps();
    }

}

