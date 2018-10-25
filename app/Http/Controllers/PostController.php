<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use Auth;
//use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest('created_at')->paginate(5);
      
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
       
     


        $request->file('photo')->store('/uploads');
        $photoName = $request->file('photo')->hashName();
        $post->photo = $photoName; 
   
        
        $post->save();
        return redirect('/posts');
        
     }

     public function create()
     {
        $categories = Category::all();
        return view('posts.create',['categories'=>$categories]);
     }

    public function store(Request $request)
    {
        

        $request->file('photo')->store('/uploads');
        $photoName = $request->file('photo')->hashName();
        
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'photo'=>$photoName,
            'category_id' => $request->category_id,
        ]);


        //Post::create($request->all());
        
        return redirect('/posts');    }

     public function destroy($id)
     {
         $post = Post::find( $id );
 
         $post->delete();
         
         
         return redirect('/posts');     }

}
