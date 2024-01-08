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
    <div class="w-1/4 m-auto py-4">
            <div class="flex">
                <h1 class="text-2xl text-cyan-600 font-bold  mb-4 w-1/2 text-center">Some About of Nature</h1>
                <img src="{{ asset('/storage/post-photo/first-post.jpg') }}" alt="" class=" h-40 w-1/2">

            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, aliquam ut sunt ullam, provident aliquid accusamus a placeat neque voluptatibus repellendus dolore at accusantium deserunt consequuntur odio minus ratione nulla?Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor odio culpa eligendi quod rem. Esse voluptatem, nulla sapiente est excepturi similique animi. Tenetur aliquid explicabo assumenda nisi quo harum modi. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis natus numquam dolore est voluptate provident amet sit. Optio, facere? Beatae voluptatem quod illum veritatis quasi esse nisi ad porro perferendis!</p>
            
            <div class="mt-8">
                <form action="" method="post">
                    <label for="comm" class="text-zinc-500">Add New Comment</label>
                    <textarea name="comment" id="comm" cols="30" rows="10" class=" w-full h-20 border border-sky-700 rounded-md text-start " placeholder="Comment here" ></textarea>
                    <div class="grid justify-end mt-5 ">
                        <button type="submit" class="flex mr-auto  px-3 py-2  bg-cyan-500 rounded-lg ">Add</button>
                    </div>
                    
                </form>
            </div>
        </div>
    
</body>
</html>