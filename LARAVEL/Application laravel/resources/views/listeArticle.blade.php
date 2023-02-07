@extends('layouts.app')
@section('content')
<section class="demo">

<div>
<nav class="bar-navigation navbar navbar-expand-lg navbar-dark ">
  <div class="container-fluid">
    <a class="navbar-brand text-uppercase fw-bolder mx-4 py-3 "  href="">Hurtel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item pe-4">
          <a class="nav-link " aria-current="page" href="/">Acceuil</a>
        </li>
        <li class="nav-item pe-4">
          <a class="nav-link " aria-current="page" href="{{ route('chapitre')}}">Ajouter un chapitre</a>
        </li>
        <li class="nav-item pe-4">
          <a class="nav-link  " aria-current="page" href="{{ route('article')}}">Ajouter un article</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav></div>
<br><br>







<h2 class="ajout">Liste Des Article</h2>

<div class="principale">
<div class="tableau">
<div class=" Liste-article- d-flex">
    <div class="colll">Titre</div>
    <div class="colll">Non</div>
    <div class="colll">Contenue</div>
    <div class="colll">Date Creation</div>
    <div class="colll">Chapitre n°</div>
    
</div>

@if($articles->count()>0)

@foreach($articles as $article)
<div class="variable-article d-flex">

<div class="variable">{{ $article->nom }}</div>
<div class="variable">{{ $article->titre }}</div>
<div class="variable">{{ $article->content }}</div>
<div class="variable">{{ $article->created_at->format('d  /  m/  y')}}</div>
<div class="variable">{{ $article->Chapitre->titre}}</div>


</div>

@endforeach


@else
    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Aucun article en base de donné </span><br><br>
   @endif
</div>

 

<div class="suprimmer">
         


@foreach($articles as $article)
<div class="icone"><a href="{{ route('listeArticle') }}" 
                                      onclick="event.preventDefault();
                                      document.getElementById(
                                     'delete-form-{{$article->id}}').submit();">
                                       
                                       <i class="suprim fas fa-trash-can "></i> </a></div>
<form id="delete-form-{{$article->id}}" 
+ action="{{route('destroy', $article->id)}}"
  method="post">
 @csrf @method('DELETE')
    </form>                                      
    @endforeach
</div>                                      

</div>
   
 </section>
 @endsection  
 