<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pago;
use App\User;
class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //$users = User::find($id);
        //return $id;
        //$sql = 'SELECT * FROM pagos';
        //$pagos = DB::select($sql);
        //$users = DB::table('users')->get();
        $suscriptor_id = DB::table('pagos')->where('suscriptor_id', '=', $id)->get();
        return view('suscriptor.estado', compact('suscriptor_id'));
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
        //
    }



    public function details($id)
    {
        //$users = User::find($id);
        //$sql = 'SELECT * FROM pagos';
        //$sql = 'SELECT * FROM users WHERE suscriptor_id = ';
        //$pagos = DB::select($sql);
        //$users = DB::table('users')->get();
        $suscriptor_id = DB::table('pagos')->where('suscriptor_id', '=', $id)->get();
        return view('suscriptor.historial', compact('suscriptor_id'));
    }

    public function detailss($id)
    {
        //$users = User::find($id);
        //$sql = 'SELECT * FROM pagos';
        //$sql = 'SELECT * FROM users WHERE suscriptor_id = ';
        //$pagos = DB::select($sql);
        //$users = DB::table('users')->get();
        $suscriptor_id = DB::table('pagos')->where('suscriptor_id', '=', $id)->get();
        return view('historial', compact('suscriptor_id'));
    }

    /*public function detailss()
    {
        $sql = 'SELECT * FROM pagos';
        $pagos = DB::select($sql);
        //$users = DB::table('users')->get();
        return view('historial', compact('pagos'));
    }*/

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
