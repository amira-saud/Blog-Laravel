<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(2);
      
        $user = $users->first();
        return view('users.index',[
            'users' => $users
        ]);
    }

    public function view($id)
    {
        if($id != " "){
           $user = User::find($id);
           if ( $user){
                return view('users.view',[ 'user' => $user ]);
           }
        }
    }


     public function destroy($id)
     {
         $user = User::find( $id );
 
         $user->delete();
         
         
         $users = User::paginate(2);
      
         $user = $users->first();
         return view('users.index',[
             'users' => $users
         ]);
     }

}
