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

<div class="acceuil">
 
<h1 class="Bienvenue">Bienvevue Dans Notre Application Demo</h1>
<div class="menu d-flex">
<div class="menus d-flex">
<div>
<a href="{{ route('listeChapitre')}}"><button>Liste Des Chapitre</button></a>
</div> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div>
<a href="{{ route('listeArticle')}}"><button>Liste Des Article</button></a>
</div> 
    </div>
    <div class="text">
      <h3>Notre Application Fait L'enregistrement Des Chapitres Et Des Articles.Il Est A Noter Que Un Ou Plusieur Articles Sont Crée Pour Un Chapitre, Autre Dit Un Chapitre Peut Avoir Plusieur Article </h3>
    </div>
    </div>

</div>


   
 </section>
 @endsection  
 