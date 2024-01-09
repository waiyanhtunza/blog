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
    <div class="w-2/3 m-auto py-4 md:w-1/3">
        
        
            <div class="flex">
                <div class="flex flex-col w-1/2">
                    <h1 class="text-2xl text-cyan-600 font-bold  mb-4 text-center">{{$post->title}}</h1>
                    <span class="text-sm text-gray-600 text-center">{{now()->diffInMinutes($post->created_at)}}minutes ago Create By User <strong>{{$post->id}}</strong></span>
                </div>
                
                <img src="{{ asset('storage/post-photo/' . $post->image) }}" alt="" class=" h-40 w-1/2 rounded-lg">

            </div>
            <p class=" shadow-lg p-2 my-4 rounded-lg ">{{$post->description}}</p>

            <div class="bg-gray-500/[0.4] text-center">
                <a href="{{route('postslist')}}">Go To Page List</a>
            </div>

            <div class="mt-8">
                <form action="{{route('comments.create',['id' => $post->id])}}" method="post">
                    @csrf
                    @method('post')
                    <label for="comm" class="text-zinc-500">Add New Comment</label>
                    <textarea name="content" id="comm" cols="30" rows="10" class=" w-full h-20 border border-sky-700 rounded-md text-start shadow-lg" placeholder="Comment here" ></textarea>
                    <div class="grid justify-end mt-2 mb-5 ">
                        <button type="submit" class=" w-20 text-center  px-3   bg-gray-500/[0.4] rounded-lg ">Add</button>
                    </div>
                </form>
            </div>
            

            @foreach ($post->comments as $comment )
                <div class="">
                    <ul class="flex flex-col-reverse ">
                        <li class="my-2 border p-2 shadow-lg rounded-lg">
                            <h1 class="text-lg font-bold">{{$comment->id}}</h1>
                            <span class="text-sm text-gray-600">{{now()->diffInMinutes($comment->created_at)}}minutes ago</span>
                            <br>
                            <span>{{$comment->content}}</span>
                        </li>   
                                                    
                    </ul>
                </div>
            @endforeach
            
        </div>
    
</body>
</html>