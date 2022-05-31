
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Virtual Conception</title>
    <link href="/css/app.css" rel="stylesheet">

</head>
<body>
   
    @forelse ($articles as $article)
        
   
     <!--Parent div-->
     
 
     <div class="grid grid-cols-1 md:grid-cols-2 gap-2">  
        <!--Second Tag-->
        <div class="p-8 bg-white">
          <!--Banner image-->
          <img
            class="rounded-lg w-full"
            src="https://images.unsplash.com/photo-1611162618071-b39a2ec055fb?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80
            "
          />

          <div>
          

             <!--Tag-->
          <p class="text-indigo-500 font-semibold text-base mt-2">
            Startup stories
          </p>
          <!--Title-->
          <h1
            class="font-semibold text-gray-900 leading-none text-xl mt-1 capitalize truncate"
          >
            {{ $article->titre }}
          </h1>
          <!--Description-->
          <div class="max-w-full">
            <p class="text-base font-medium tracking-wide text-gray-600 mt-1">
              {{ $article->description }}
            </p>

            <button class="">
               <a href="{{ route('blog.detail',['id'=>$article ])}}"><span>
                    Voir plus...
                </span></a> 
            </button>
          </div>
          <div class="flex items-center space-x-2 mt-8">
            <!--Author's profile photo-->
            <img
              class="w-10 h-10 object-cover object-center rounded-full"
              src="https://randomuser.me/api/portraits/men/54.jpg"
              alt="random user"
            />
            <div>
              <!--Author name-->
              <p class="text-gray-900 font-semibold">Lugano Shabani</p>
              <p class="text-gray-500 font-semibold text-sm">
               {{ $article->created_at }} &middot; 
              </p>
            </div>
          </div>
          </div>
         
          
        </div>
        <!--End of first card-->
      </div>
      @empty
        no articles
      @endforelse
      <!--End of parent div-->
  
      <script src="" async defer></script>

   
   
   
    </body>
</html>
