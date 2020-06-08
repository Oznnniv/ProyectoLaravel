<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cobrador extends Model
{
	protected $table='users';
	protected static function boot()
	{
    	parent::boot();
        static::addGlobalScope('rol', function (Builder $builder)
        {
        	$builder->where('rol', '=', 'cobrador');
        });
    }
}
