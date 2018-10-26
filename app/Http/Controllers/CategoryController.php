<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(5);
      
        $category = $categories->first();
        return view('categories.index',[
            'categories' => $categories
        ]);
    }

    public function view($id)
    {
        if($id != " "){
           $category = Category::find($id);
           if ( $category){
                return view('categories.view',[ 'category' => $category ]);
           }
        }
    }

    public function edit($id)
    {
        if($id != " "){
           $category = Category::find($id);
           if ( $category){
                return view('categories.edit',[ 'category' => $category ]);
           }
        }
    }
    public function update(Request $request, $id)
    {
     
        $category = Category::find($id);
        $category->title= $request->input('title');
       
     
        $category->save();
        return redirect()->route('categories.index');
     }

     public function create()
     {
         return view('categories.create');
     }

    public function store(Request $request)
    {
        
        Category::create([
            'title' => $request->title,
        ]);
        
       return redirect(route('categories.index')); 
    }

     public function destroy($id)
     {
         $category = Category::find( $id );
 
         $category->delete();
         
         
         return redirect()->route('categories.index');
     }
     public function categoryPosts($id)
     {

        if($id != " "){
            $category = Category::find($id);
            if ( $category){

                $posts = Post::where('category_id',$id)->get();
                return view('categories.catPosts',[
                    'posts' => $posts
                ]);
            }
         }

        // $categories = Category::all();
        
     }

}
