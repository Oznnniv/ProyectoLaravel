<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $fillable = ['concepto', 'desc', 'monto', 'fecha_pago', 'suscriptor_id'];

    /*public function name()
	{
		$users = DB::table('users')->get();//Query Builder
		$users = User::all();//Eloquent
		return view('admin.home', compact("users"));
		$id = \Auth::user()->id;
		$sql = 'SELECT name FROM users WHERE suscriptor_id = '$id'';
		$name = DB::select($sql);
		return $name;
	}*/
}


