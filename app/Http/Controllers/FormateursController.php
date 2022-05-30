<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormateursController extends Controller
{
    //
    public function index(){
        return view('formateur');
    }

    public function detail(){
        return view('detail');
    }
}
