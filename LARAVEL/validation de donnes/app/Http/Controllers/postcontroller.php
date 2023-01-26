<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\comment;
use App\Models\Post;
use App\Models\video;
use Illuminate\Http\Request;

class postcontroller   extends Controller
{

    public function index(){


    $posts =Post::all();
    $video= video::find(1);
    
        return view ('article',[
            'posts'=> $posts,
            'video'=>$video
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




  
    //  $post= new Post();
    //     $post->title= $request->title;
    //     $post->content= $request->content;
    //     $post->save();

  $request ->validate([

    'title'=>'required',
    'content'=>'required'

  ]);

    Post::created([

        'title'=>$request->title,
        
        'content'=>$request->content
    ]);    

        dd('post creer!');
    }


    public function contact(){
        
        return view('contact');
    }
   public  function  register(){

    $post = Post::find(11);

    $video= video::find(1);

    $comment1=  new comment(['content'=>'mon premier commentaire']);
    $comment2=  new comment(['content'=>'mon deuxieme commentaire']);
    $post->comments()->saveMany([
        $comment1,
        $comment2
    ]);
    
    $comment3=  new comment(['content'=>'mon trisieme  commentaire']);  
    $video->comments()->save($comment3);
} 


}
