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

}
