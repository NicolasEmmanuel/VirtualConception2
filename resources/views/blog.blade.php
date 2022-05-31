
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
 <a href="{{route('blog.editor')}}"> <button type="" class="btn btn-success">Ajouter un post</button> </a> 

    @forelse ($articles as $article)
        
   
     
      @empty
        no articles
      @endforelse
     
  
      

   
   
   
    </body>
</html>
