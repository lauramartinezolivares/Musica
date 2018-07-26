<?php

namespace App\Http\Controllers;

use DB;
use App\Cantantes;
use Session;
use Illuminate\Http\Request;

class DiscosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discos=\App\Discos::all();
        return view('discos',compact('discos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disco = new \App\Discos;
        return view('añadir-disco',[
            'discos' => $disco,
        ]);
    }

    /**
     * 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cantante_nombre = $request->get('cantante_nombre');

        $cantante_id = $this->comprobar_cantante($cantante_nombre);

        var_dump($cantante_id);

        $disco = new \App\Discos;
        $disco->cantantes_id=$cantante_id->id;
        $disco->nombre=$request->get('nombre');
        $disco->genero=$request->get('genero');
        $disco->save();

        return redirect('discos');
    }
       /**
     * Display the specified resource.
     *
     * @param  $cantante  $nombre
     * @return \Illuminate\Http\Response
     */
    public function comprobar_cantante($cantante_nombre){
        
        $cantante_id = DB::table('cantantes')->where('nombre', $cantante_nombre)->first();

        if($cantante_id === null){
           
            $cantante = new \App\Cantantes;
            $cantante->nombre=$cantante_nombre;
            $cantante->tipo_voz=('Generica');
            $cantante->save();

            var_dump($cantante->id);

            return $cantante;

        } else {
            return $cantante_id;
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $discos = DB::table('discos')->where('cantantes_id', $id)->get();
        $cantante_nombre = DB::table('cantantes')->select('nombre')->where('id', $id)->first();
        
       /* if(empty($discos)){
            return redirect('cantantes')->with('warning','Este cantante todavia no tiene discos');  
        }else{}*/
        return view('discos_por_cantante',[
            'discos' => $discos,
            'cantante' => $cantante_nombre
        ]);
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $discos = \App\Discos::find($id);
        return view('editar_disco', [
            'discos' => $discos,
        ]);
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
        $disco= \App\Discos::findOrFail($id);
        $disco->nombre=$request->get('nombre');
        $disco->genero=$request->get('genero');
        $disco->save();
        return redirect('discos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disco= \App\Discos::findOrFail($id);
        $disco->delete();
        return redirect('discos');
    }
}
