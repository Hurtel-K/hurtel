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

   



<h2 class="ajout">Liste Des Chapitre</h2>

<div class="tableau">

<div class="container ">
  <div class="row row-cols-3">
    <div class="col">Titre</div>
    <div class="col">Date Creation</div>
    <div class="col">suprimmer</div>
  </div>
</div>

@if($chapitres->count()>0)

@foreach($chapitres as $chapitre)


<div class="variable-chapitre d-flex">

<div class="variablee"><a href="{{ route('chapitre.show', $chapitre)}}">{{ $chapitre->titre }}</a></div>
<div class="variablee">{{ $chapitre->created_at->format('d  /  m/  y')}}</div>
<div class="variblee"><a href="{{ route('listeChapitre') }}" 
                                      onclick="event.preventDefault();
                                      document.getElementById(
                                     'delete-form-{{$chapitre->id}}').submit();">
                                       
                                        
                                       <i class="suprim  fas fa-trash-can "></i> </a></div>
<form id="delete-form-{{$chapitre->id}}" 
+ action="{{route('destroyy', $chapitre->id)}}"
  method="post">
 @csrf @method('DELETE')
    </form>                                       


</div>
 @endforeach
 @else
    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Aucun chapitre en base de donné </span><br><br>
     @endif
   
</div>

  
 </section>
 @endsection  
