<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        

        // dd($posts);
        
        return view('postslist',['posts' => $posts]);
    }

    public function postDetails($id){

        $post = Post::find($id);
        return view('posts.index',['post' => $post]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->image->getClientOriginalName());

        $data = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required'
            
        ]);
        $fileName = time() . '.' . $request->image->getClientOriginalName();
        $request->image->move('storage/post-photo', $fileName);

        $newPost = new Post;
        $newPost->title = $data['title'];
        $newPost->description = $data['description'];
        $newPost->image = $fileName;
        $newPost->save();

        return redirect()->route('postslist');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $post = Post::find($id);
        
        return view('post.index',['id' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
