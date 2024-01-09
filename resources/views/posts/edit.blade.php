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
    <div class="w-10/12 m-auto">

        
        <form action="{{route('posts.update',['id'=>$post->id])}}" method="post" enctype="multipart/form-data" class="w-2/3 mx-auto p-5">
            @csrf
            @method('put')

            <label for="title" class="block text-2xl font-bold text-gray-400">Add Title</label>
            <input type="text" name="title" id="title" class="w-full  h-10 my-5 block border-2 rounded-lg" value="{{$post->title}}">

            <label for="description" class="block text-2xl font-bold text-gray-400 my-5">Add Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="w-full  h-40 my-5 block border-2 rounded-lg" >{{$post->description}}</textarea>

            <label for="img" class=" text-2xl font-bold text-gray-400">Add Image</label>
            <br>
            <img src="{{ asset('storage/post-photo/' . $post->image) }}" alt="" class="h-40  rounded-lg ">

            <input type="file" src="" alt="" name="image" id="img" class="my-5 block">
            
           

            <div class="grid justify-end mt-5">
                <button type="submit" class="flex mr-auto  px-3 py-2  bg-gray-500/[0.4] rounded-lg">Update</button>
            </div>
        </form>
    </div>
    
</body>
</html>