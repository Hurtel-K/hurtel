@extends('layouts.app')
<section class="view-chapitre">
@section('content')


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
          <a class="nav-link active" aria-current="page" href="/">Acceuil</a>
        </li>
        <li class="nav-item pe-4">
          <a class="nav-link active" aria-current="page" href="{{ route('chapitre')}}">Ajouter un chapitre</a>
        </li>
        <li class="nav-item pe-4">
          <a class="nav-link  active" aria-current="page" href="{{ route('article')}}">Ajouter un article</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav></div>
<div class="acceuil">

<h3 class="ajout">Ajouter un chapitre</h3 >
         
@if ($errors->any())

@error('titre')
<div class="errors">Le champ titre est requit </div>
@enderror


@endif
  <form method="POST" action="{{route('chapitre.store')}}" >
      @csrf
      <div class="containere">
      
        <div class="row row3">
       
          <div class="col-md-6 col-sn">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> <i class="fas fa-user"></i> </span>
            <input type="text" name ="titre" class="form-control" placeholder="Votre titre pour l'article" >
          </div>
          </div>
          <br>  


    
       </div> 
        </div>
        </div>
           
        <button type="submit">Creer</button>
      </form>
@endsection  











  
