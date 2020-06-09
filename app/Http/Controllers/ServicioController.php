<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicio::orderBy('id', 'DESC')->paginate(3);
        return view('index', compact('servicios'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicio = new Servicio();
        $servicio->fill($request->except('img1', 'img2', 'img3'));
        if($request->hasFile('img1')){
            $file1 = $request->file('img1');
            $nuevo1 = time().$file1->getClientOriginalName();
            $servicio->img1 = $nuevo1;
            $file1->move(public_path().'/images/', $nuevo1);
        }else{
            $nuevo1 = NULL;
        }
        if($request->hasFile('img2')){
            $file2 = $request->file('img2');
            $nuevo2 = time().$file2->getClientOriginalName();
            $servicio->img2 = $nuevo2;
            $file2->move(public_path().'/images/', $nuevo2);
        }else{
            $nuevo2 = NULL;
        }
        if($request->hasFile('img3')){
            $file3 = $request->file('img3');
            $nuevo3 = time().$file3->getClientOriginalName();
            $file3->move(public_path().'/images/', $nuevo3);
            $servicio->img3 = $nuevo3;
        }else{
            $nuevo3 = NULL;
        }
        $servicio->save();
        return redirect('/servicio')->with('success','El servicio ha sido creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details(Servicio $servicio)
    {
        return view('details', compact('servicio'));
    }
    public function detailss(Servicio $servicio)
    {
        return view('message', compact('servicio'));
    }

    public function indexx()
    {
        $servicios = Servicio::orderBy('id', 'DESC')->paginate(3);
        return view('nadie.index', compact('servicios'));
    }

    public function indexxx()
    {
        $servicios = Servicio::orderBy('id', 'DESC')->paginate(3);
        return view('suscriptor.index', compact('servicios'));
    }

    /*
    public function show(Servicio $servicio)
    {
        return view('details', compact('servicio'));
    }
    */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {
        //$servicio =  Servicio::find($id);
        return view('edit', compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, Servicio $servicio)
    public function update(Request $request)
    {
        $servicio = new Servicio();
        $servicio->fill($request->except('img1', 'img2', 'img3'));
        if($request->hasFile('img1')){
            $file1 = $request->file('img1');
            $nuevo1 = time().$file1->getClientOriginalName();
            $servicio->img1 = $nuevo1;
            $file1->move(public_path().'/images/', $nuevo1);
        }else{
            $nuevo1 = NULL;
        }
        if($request->hasFile('img2')){
            $file2 = $request->file('img2');
            $nuevo2 = time().$file2->getClientOriginalName();
            $servicio->img2 = $nuevo2;
            $file2->move(public_path().'/images/', $nuevo2);
        }else{
            $nuevo2 = NULL;
        }
        if($request->hasFile('img3')){
            $file3 = $request->file('img3');
            $nuevo3 = time().$file3->getClientOriginalName();
            $servicio->img3 = $nuevo3;
            $file3->move(public_path().'/images/', $nuevo3);
        }else{
            $nuevo3 = NULL;
        }
        $servicio->save();
        return redirect('/servicio')->with('success','El servicio ha sido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $servicio = Servicio::find($id);
            if ($servicio != null){
                $servicio->delete();
                return redirect('/servicio')->with('success', 'El curso ha sido borrado');
            }else{
                return redirect('/servicio')->with('error', 'El curso no ha sido encontrado');
            }
        }catch (\Illuminate\Database\QueryException $e){
            if($e->getCode()==23000)
                return redirect('/servicio')->with('error', $e->getMessage());;
        }
        /*Servicio::find($id)->delete();
        return redirect('/servicio')->with('success','El servicio ha sido borrado');*/
    }
}