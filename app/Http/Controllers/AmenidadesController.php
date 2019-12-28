<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmenidadesController extends Controller
{
    public function index(){

        $amenidades = \DB::table('t_amenidades')->select('id','nombre')->get();
        // return $amenidades;
        return view('articulos.index',compact('amenidades'));
    }
}
