<?php

namespace app\Http\Controllers;

use App\Models\Post;
use App\Models\image;
use App\Models\video;
use App\Models\comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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

          
//   $request ->validate([

//     'title'=>'required',
//     'content'=>'required'

//   ]);


     $path=  $filename= time().'.'.$request->avatar->extension();
      
        $request->file('avatar')->storeAs(
     'avatars',
     $filename,
     'public'

        );
       
       
  

   $post= Post::created([

        'title'=>$request->title,
        
        'content'=>$request->content
    ]); 
    $image =new image(); 
    
    $image->path=$path;

    // $image()->post_id=$post->id;


    
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
