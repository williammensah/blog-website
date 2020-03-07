<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function show($post){
     $posts = [
         'my-first-blog' => 'this is my first blog',
         'my-second-blog' => 'this is another one',

     ];
     

     if (! array_key_exists($post,$posts)) {
         # code...
           abort(404,'Page not found');
     }

     return view('post',[
        'post' => $posts[$post]

     ]);
     
    }
}
