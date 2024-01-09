<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="flex items-end  ">   
        <h1 class="text-7xl font-bold mt-5 text-center w-10/12">Daily Posts From Myanmar</h1>
        <a href="{{route('posts.create')}}" class="bg-cyan-500 text-slate-900 font-bold h-8 w-40 rounded-lg flex items-center justify-center">Create New Post</a>

    </div>


    <div class="w-8/12 h-full mx-auto mt-6 grid grid-flow-row justify-items-center grid-cols-4 gap-4  ">

        
        @foreach ($posts as $post )
            <div class="w-72 h-96 bg-white border rounded-lg">
                    <div class="p-4 h-full">
                        <h1 class="text-lg">{{$post->title}}</h1>
                       
                        <img src="{{ asset('storage/post-photo/' . $post->image) }}" alt="" class="h-40 w-full rounded-lg ">
                        

                        <a href="{{route('posts.index',['id' => $post->id])}}">
                            <span class="text-sm text-sky-500 hover:underline">{{ Str::limit($post->description, 100) }}</span>
                        </a>
                    </div>
            </div>
        @endforeach

        
        
        
    </div>
</body>
</html>