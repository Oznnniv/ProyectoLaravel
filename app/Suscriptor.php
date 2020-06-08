<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscriptor extends Model
{
	protected $table='users';
	protected static function boot()
	{
    	parent::boot();
        static::addGlobalScope('rol', function (Builder $builder)
        {
        	$builder->where('rol', '=', 'suscriptor');
        });
    }
    public function servicio()
    {
        return $this->belongsToMany(Servicio::class)->withTimestamps();
    }
}
