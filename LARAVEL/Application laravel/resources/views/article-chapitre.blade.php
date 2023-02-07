
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/style/articlechapitre.css') }}" />
    <link rel="stylesheet" href="style/boostrap.min.css">
    <link rel="stylesheet" href="style/boostrap.min.css.map">

    <title>Document</title>
</head>
<body>
<section class="demo">
    <nav class="bar-navigation navbar navbar-expand-lg navbar-dark ">
    
  <div class="container-fluid">
    <a class="navbar-brand text-uppercase fw-bolder mx-4 py-3 " href="#">HURTEL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item pe-4">
          <a class="nav-link " aria-current="page" href="/">Acceuil</a>
        </li>
        <li class="nav-item pe-4">
          <a class="nav-link" href="{{ route('chapitre')}}">Ajouter un chapitre</a>
        </li>
        <li class="nav-item pe-4">
          <a class="nav-link" href="{{ route('article')}}">Ajouter un article</a>
        </li>
        </ul>
    </div>
  </div>
</nav>


<h2 class="ajout">Champs Du Chapitre</h2>

<div class="tableau">

<div class="roww container ">
  <div class=" row row-cols-2">
    <div class="col">Titre</div>
    <div class="col">Date Creation</div>
  </div>
</div>



<div class="variable-chapitre d-flex">

<div class="variableUn"><a href="{{ route('chapitre.show', $chapitre)}}">{{ $chapitre->titre }}</a></div>
<div class="variableDeux">{{ $chapitre->created_at->format('d  /  m/  y')}}</div>


</div>

</div>

  


<h2 class="ajout">Liste Des Articles Associés</h2>

<div class="tableau">
<div class="Liste-article-chapitre d-flex">
    <div class="coll">Titre</div>
    <div class="coll">Non</div>
    <div class="coll">Contenue</div>
    <div class="coll">Date Creation</div>
    <div class="coll">Chapitre n°</div>
  </div>

 
@foreach($articles as $article)

<div class="variable-article d-flex">

<div class="variable">{{ $article->nom }}</div>
<div class="variable">{{ $article->titre }}</div>
<div class="variable">{{ $article->content }}</div>
<div class="variable">{{ $article->created_at->format('d  /  m/  y')}}</div>
<div class="variable">{{ $article->chapitre_id}}</div>

</div>
@endforeach

</div>
    </section>
</body>
</html>
