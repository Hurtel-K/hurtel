<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Chapitre;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){
    
        

    

        return view('Demo');
  

    }

    
      public function show(Chapitre $chapitre){
    
     //  $articles =Article::where('chapitre_id',"=",1);
     $articles =Article::all()->where('chapitre_id',"=",$chapitre->id);
     


         return view('article-chapitre',[
            'chapitre'=>$chapitre, 
            'articles'=>$articles
        ]);



    }
    
    public function create(){

        return view ('Chapitre');
    }

public function store(Request $request ){
   
    $request->validate([
        'titre'=> 'required'
    ]);
  
    chapitre::create([

    'titre'=> $request->titre
    ]);
   
    $chapitres =Chapitre::all();
    return view('listeChapitre',[

        'chapitres'=> $chapitres ]);

}


public function createe(){
    $chapitres=chapitre::all();
    return View ('Article',[
        
        'chapitres'=>$chapitres
    ]);
}


public function storee(Request $request ){

    $request->validate([
        
           'titre' => 'required',
    
             'nom' =>'required',

          'content'=>'required',

        'chapitre_id'=>'required'

    ]);
  
    Article::create([

    'titre'=> $request->titre,
    
    'nom'=> $request->nom,
    
    'content'=> $request->content,

    'chapitre_id'=>$request->chapitre_id,

  
    ]);
   
    $articles =Article::all();
    return view('listeArticle',[

        'articles'=> $articles ]);


}
public function listeChapitre(){

    $chapitres =Chapitre::all();

    return view('listeChapitre',[

        'chapitres'=> $chapitres 

    ]);
}



public function listeArticle(){

    $articles =Article::all();

    return view('listeArticle',[

         
 'articles'=> $articles

    ]);
}

      
public function destroyy($id) 
{
   $chapitre = Chapitre::where('id', $id)->firstorfail()->delete();
   echo ("User Record deleted successfully.");
   return redirect()->route('listeChapitre');
}

public function destroy($id) 
       {
          $articles = Article::where('id', $id)->firstorfail()->delete();
          echo ("User Record deleted successfully.");
          return redirect()->route('listeArticle');
       }

 
}


        

        

