<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index(){

        $formations = Formation::all() ;
        return view('Formation.formations', compact('formations')) ;
    }

    public function detail($nom){

        $details = Formation::where('nom', '=', $nom) ;
        $formations = Formation::all() ;
        return view('Formation.detail_formations', compact('details','formations')) ;
    }
}