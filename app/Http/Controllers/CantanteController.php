<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CantanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cantantes=\App\Cantantes::all();
        return view('cantante',compact('cantantes'));

    }

       /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cantante = \App\Cantantes::find($id);
        return view('editar_cantante', [
            'cantante' => $cantante,
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
        $cantante= \App\Cantantes::findOrFail($id);
        $cantante->nombre=$request->get('nombre');
        $cantante->tipo_voz=$request->get('tipo_voz');
        $cantante->save();
        return redirect('cantantes');
    }
 /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      /*  public function destroy($id)
    {
        $cantante= \App\Cantantes::findOrFail($id);
        $cantante->delete();
        return redirect('cantantes');
    }*/


}
