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


  
        
    
    <div class="w-1/3 m-auto py-4">
            <div class="flex">
                <h1 class="text-2xl text-cyan-600 font-bold  mb-4 w-1/2 text-center">{{$post->title}}</h1>
                <img src="{{ asset('storage/post-photo/' . $post->image) }}" alt="" class=" h-40 w-1/2">

            </div>
            <p class=" shadow-lg p-2 my-4 ">{{$post->description}}</p>
            
            <div class="mt-8">
                <form action="{{route('comments.create',['id' => $post->id])}}" method="post">
                    @csrf
                    @method('post')
                    <label for="comm" class="text-zinc-500">Add New Comment</label>
                    <textarea name="comment" id="comm" cols="30" rows="10" class=" w-full h-20 border border-sky-700 rounded-md text-start shadow-lg " placeholder="Comment here" ></textarea>
                    <div class="grid justify-end mt-5 ">
                        <button type="submit" class="flex mr-auto  px-3 py-2  bg-cyan-500 rounded-lg ">Add</button>
                    </div>
                </form>
            </div>

            <div class="">
                <ul class="flex flex-col-reverse ">
                    <li class="my-2 border p-2 shadow-lg">
                        <h1 class="text-lg font-bold">first Person</h1>
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam aperiam, vero voluptas ea sit nulla, accusantium quasi fugiat nesciunt et qui error velit delectus quam. Voluptatem earum deleniti fuga sapiente.</span>
                    </li>                                 
                </ul>
            </div>
        </div>
    
</body>
</html>