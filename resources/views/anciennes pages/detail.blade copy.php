@extends('layouts.app')
@section('content')



<!-- component -->

<!-- background -->
<div class="relative flex min-h-screen flex-col justify-center bg-gradient-to-r from-rose-100 to-teal-100">
   
    <!-- card -->
    <div class="mx-auto flex w-96 flex-col justify-center bg-white rounded-2xl shadow-xl shadow-slate-300/60">
      <h1>Description</h1>
      
        <!-- img -->
        <img class=" rounded-t-2xl object-cover object-center" src={{$detailFormateur->photo}} />
      
          <!-- text information -->
          <div class="p-4">
            
            <small class="text-blue-400 text-xs">{{$detailFormateur->role}}</small>

            <h1 class="text-2xl font-medium text-slate-600 pb-2">{{$detailFormateur->name}}</h1>

            <p class="text-sm tracking-tight font-light text-slate-400 leading-6">{{$detailFormateur->presentation}}</p>

            

          </div>
          <a href="/" class="px-2 py-2 bg-blue-500 text-white rounded-full">retour</a>

      </div>
  </div>