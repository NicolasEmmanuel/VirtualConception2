<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Formateur;
use Illuminate\Http\Request;

class FormateursController extends Controller
{
    //
    public function index(){

        
        $formateurs=User::all()->where('role', '=', 'formateur' );
        return view('formateur', compact('formateurs'));
    }

    public function detail($id){

        $detailFormateur=User::FindOrFail($id);
        return view('detail', compact('detailFormateur'));
    }
}
