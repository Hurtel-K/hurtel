<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;

class postcontroller   extends Controller
{

    public function index(){



        return view ('article');
    }


    public function show($id){

        $posts=[
            1 => 'mon titre no 1',
            2 => 'mon titre no 2'
        ];

        $post= $posts[$id];  

        return view('articles',[
         
            'post' =>  $post
        ]);
    }

    public function contact(){
        
        return view('contact');
    }

}
