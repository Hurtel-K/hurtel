<template>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <form method="" action="">
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
    <option value="">  </option>
</select>
<br>
    
</div>
</div>
</div>
    <button type="submit">Creer</button>
</form>
</template>

<script>
export default {

}
</script>

<style scoped>
form{
    margin: 200px;
}

</style>