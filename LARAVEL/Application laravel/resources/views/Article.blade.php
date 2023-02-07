
@section('content')
<section class="view-article">
@extends('layouts.app')


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
</nav>
<div class="acceuil">
<div><h2 class="ajout text-center text-light ">Ajouter Un Article</h2>
  <section class="order-form py-5">
    <div class="container">
        
@if ($errors->any())

@error('titre')
<div class="errors">Le champ titre est requit </div>
@enderror


@error('nom')
<div class="errors">Le champ nom est requit </div>
@enderror


@error('content')
<div class="errors">Le champ content est requit </div>
@enderror


@error('chapitre_id')
<div class="errors">Le champ chapitre est requit </div>
@enderror

@endif
      <form method="POST" action="{{route('article.storee')}}" >
      @csrf
      <div class="containere">
      <div>
        <div class="row row3">
          <div class="col-md-6 col-sn">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> <i class="fas fa-user"></i> </span>
            <input type="text" name ="titre" class="form-control" placeholder="Votre titre pour l'article"  >
          </div>

          <div class="col-md-6 col-sn">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> <i class="fas fa-user"></i> </span>
            <input type="text" name ="nom" class="form-control" placeholder="votre nom pour l'article" >
          </div>

          <div class="input-group">
            <span class="input-group-text">Contenue </span>
            <textarea class="form-control" name="content" aria-label="With textarea" placeholder="votre contenu pour l'article"></textarea>
          </div><br>

          
          
           
          <select name="chapitre_id"  class="form-select input-group" aria-label="Default select example">
            
  <option selected>votre chapitre pour l'article</option>
  
  @foreach($chapitres as $chapitre)
              <option value="{{$chapitre->id}}">{{$chapitre->titre}}</option>
   @endforeach

</select>
<br>
         

        

</div>
  
        </div>
        </div>
        <button type="submit">Creer</button>
      </form>
</div>
      </div>
    </div>
  </div>
</section>
 @endsection  

