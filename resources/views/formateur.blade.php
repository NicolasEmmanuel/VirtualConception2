<h1>Nos Formateurs</h1>

<!-- Card  -->
<div id="container" class="w-4/5 mx-auto">
    <div class="flex flex-col sm:flex-row">

      @foreach ($formateurs as $item)

      <div class="sm:w-1/4 p-2">
        <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">

            <div class="mb-3">
                    <img class="w-auto mx-auto rounded-full" src={{$item->photo}} alt=""/>
            </div>
                    <h2 class="text-xl font-medium text-gray-700">{{$item->name}}</h2>
            <span class="text-blue-500 block mb-5">{{$item->role}}</span>

            <a href="detail/{{$item->id}}" class="px-4 py-2 bg-blue-500 text-white rounded-full">voir plus</a>
        </div>
      </div>
          
      @endforeach
      
      
    </div>
</div>