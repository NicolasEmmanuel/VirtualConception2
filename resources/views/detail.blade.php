<h1>Description</h1>

<!-- component -->

<!-- background -->
<div class="relative flex min-h-screen flex-col justify-center bg-gradient-to-r from-rose-100 to-teal-100">
   
    <!-- card -->
    <div class="mx-auto flex w-96 flex-col justify-center bg-white rounded-2xl shadow-xl shadow-slate-300/60">
      
        <!-- img -->
      <img class="aspect-video w-96 rounded-t-2xl object-cover object-center" src={{$detailFormateur->photo}} />
      
      <!-- text information -->
      <div class="p-4">
        <small class="text-blue-400 text-xs">{{$detailFormateur->name}}</small>
        <h1 class="text-2xl font-medium text-slate-600 pb-2">{{$detailFormateur->role}}</h1>
        <p class="text-sm tracking-tight font-light text-slate-400 leading-6">{{$detailFormateur->presentation}}</p>
      </div>
    </div>
  </div>