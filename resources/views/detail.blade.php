@extends('layouts.app')
@section('content')



<!-- component -->
<!-- Create By Joker Banny -->
<div class="min-h-screen bg-gray-100 flex items-center justify-center">

  <div class=" w-80 bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl hover:scale-105 duration-500 transform transition cursor-pointer">

    <img src={{$detailFormateur->photo}} alt="">

      <div class="p-5">
          <h1 class="text-2xl font-bold">{{$detailFormateur->name}}</h1>
          <p class="mt-2 text-lg font-semibold text-gray-600">{{$detailFormateur->role}}</p>
          <p class="mt-1 text-gray-500 font-">{{$detailFormateur->presentation}}</p>
      </div>
      <a href="/" class="px-2 py-2 bg-blue-500 text-white rounded-full">retour</a>
  </div>

</div>