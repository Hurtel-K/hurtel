<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class postcontroller   extends Controller
{

    public function index(){

    $posts =Post::all();
    

        return view ('article',[
            'posts'=> $posts
        ]);
    }


    public function show($id){
        $post= Post ::findOrfail($id);
       

       /* $posts=[
            1 => 'mon titre no 1',
            2 => 'mon titre no 2'
        ];

        $post= $posts[$id]; **/ 

        return view('articles',[
         
            'post' =>  $post
        ]);
    } 

    public function create() {

        return view('Form');
    }
    public function store(Request $request ){
  
     $post= new Post();
        $post->title= $request->title;
        $post->content= $request->content;
        $post->save();
        
        dd('post creer!');
    }


    public function contact(){
        
        return view('contact');
    }

}
