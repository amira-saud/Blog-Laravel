<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
//use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);
      
        $post = $posts->first();
        return view('posts.index',[
            'posts' => $posts
        ]);
    }

    public function view($id)
    {
        if($id != " "){
           $post = Post::find($id);
           if ( $post){
                return view('posts.view',[ 'post' => $post ]);
           }
        }
    }

    public function edit($id)
    {
        if($id != " "){
           $post = Post::find($id);
           if ( $post){
                return view('posts.edit',[ 'post' => $post ]);
           }
        }
    }
    public function update(Request $request, $id)
    {
     
        $post = Post::find($id);
        $post->title= $request->input('title');
        $post->description = $request->input('description');
       
     
        $post->save();
        return redirect()->route('posts.index');
     }

     public function create()
     {
         return view('posts.create');
     }

    public function store(Request $request)
    {
        
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        
       return redirect(route('posts.index')); 
    }

     public function destroy($id)
     {
         $post = Post::find( $id );
 
         $post->delete();
         
         
         return redirect()->route('posts.index');
     }

}
