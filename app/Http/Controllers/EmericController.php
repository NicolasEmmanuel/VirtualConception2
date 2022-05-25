<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmericController extends Controller
{
    public function index(){

        return view('Formation.formations');
    }
}
