<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Suscripción;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sql = 'SELECT * FROM users WHERE rol = "suscriptor"';
        $users = DB::select($sql);

        //$users = DB::table('users')->get();
        return view('subs', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);

        $fecha_inscrip = DB::table('suscripciones')
        ->join('users', 'users.id', '=', 'suscripciones.suscriptor_id')
        ->select('suscripciones.fecha_insc')
        ->where('users.id', $id)
        ->get();

        $servicio_name = DB::table('servicios')
        ->join('suscripciones', 'suscripciones.servicio_id', '=', 'servicios.id')
        ->select('servicios.nombre')
        ->where('suscripciones.suscriptor_id', $id)
        ->get();
        //echo $servicio_id;

        //$suscriptor_id = Suscripción::find($id);S
        //$suscriptor_id = DB::table('suscripciones')->select('fecha_insc')->where('suscriptor_id', $id)->get();
        //$servicio_id = DB::table('servicios')->select('nombre')->where('suscriptor_id', $id)->get()->toJson();
        //$suscriptor_id = Suscripción::where('suscriptor_id', '=', $id)-get();
        return view('detail')->with(compact('users', 'fecha_inscrip', 'servicio_name'));
        //return view('detail', compact('suscriptor_id'));

    }

    public function shows($id)
    {
        $users = User::find($id);
        return view('historial')->with('users', $users);
    }
    public function message($id)
    {
        $users = User::find($id);
        return view('message')->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
