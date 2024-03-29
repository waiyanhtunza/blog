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
        <a href="{{route('posts.create')}}" class="bg-gray-500/[0.4] text-slate-900 font-bold h-8 w-40 rounded-lg flex items-center justify-center">Create New Post</a>

    </div>


    <div class="w-8/12 h-full mx-auto mt-6 grid grid-flow-row justify-items-center grid-cols-2 md:grid-cols-4 gap-4  ">
        
        @foreach ($posts as $post )
            <div class="w-72 h-96 bg-white border rounded-lg ">
                    <div class="p-2 h-full mx-4">
                        <h1 class="text-lg h-16">{{$post->title}}</h1>
                       
                        <img src="{{ asset('storage/post-photo/' . $post->image) }}" alt="" class="h-40 w-full rounded-lg ">
                        

                        <div class="h-20 mb-4">
                            <span class="text-sm text-gray-500 ">{{ Str::limit($post->description, 30) }}
                                <br>
                                <a href="{{route('posts.index',['id' => $post->id])}}" class="h-40 hover:underline">
                                    Read More ....
                                </a>
                            </span>
                        </div>
                       

                        <div class="w-10 bg-gray-500 text-center rounded-lg text-sm text-white">
                            <form action="{{route('posts.edit',['id' => $post->id])}}" method="get" class=" ">
                                @csrf
                                @method('get')
                                <button class="rounded-lg">Edit</button>
                            </form>
                        </div>
                    </div>
            </div>
        @endforeach
    </div>
</body>
</html>