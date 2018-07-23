<?php

namespace App\Http\Controllers;

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
        return view('discos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $discos = Discos::create($request->all());

        return response()->json($discos);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Disco $discos)
    {
        return response()->json($discos);    }

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
