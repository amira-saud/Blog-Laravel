<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('home');
        $posts = Post::latest('created_at')->paginate(5);
       
        $post = $posts->first();
        
        return view('home',[
            'posts' => $posts
        ]);
    }

    public function viewProfile($id)
    {
        if($id != " "){
           $user = User::find($id);
           if ( $user){
                return view('users.view',[ 'user' => $user ]);
           }
        }
    }

}
