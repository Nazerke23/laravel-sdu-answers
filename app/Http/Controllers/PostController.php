<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = Post::orderBy('created_at', 'desc')->with(['user', 'likes'])->paginate(15);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show(Post $post){
        return view('posts.show', [
            'post' => $post
        ]);
    }



    public function store(Request $request){
        
        $this->validate($request, [
            'body' => 'required',
            // 'image' => 'nullable|sometimes|image|mimes:jpeg,png|max:100'
        ]);


        if($request->user() === null){
            return back();
         }

        $post = new Post();

        $post->body = $request->input('body');
        
        // if($request->hasFile('image')){
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$extension;
        //     $file->move('uploads/post-images/', $filename);
        //     $post->image=$filename;
        // }
        // else{
        //     return $request;
        //     $post->image='';
        // }
        
        //$request->user()->posts()->create($request->only('body'));

        $request->user()->posts()->create([
            'body' => $post->body,
            'image' => $post->image
        ]);


       

        return back();
    }



    public function destroy(Post $post){
       
        $this->authorize('delete', $post);
        $post->delete();

        return back();
    }
}
