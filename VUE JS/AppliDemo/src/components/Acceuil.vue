<template>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <div class="Option">
    <h1>Bienvenue dans notre Application Demo</h1>
    <div class="boutton">
      <router-link to="/liste_chapitre"> <button type="button" class="btn btn-primary btn-lg"></button></router-link>
      <router-link to="/liste_article"> <button type="button" class="btn btn-primary btn-lg"></button></router-link>

        
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<style scoped>
.Option{
    margin: 100px ;
    text-align: center;
    font-size: 30px;
    
}
.boutton{
  margin: 200px;
 
}
button{
  margin-right: 100px;
  font-family: merriweather;
  background-color:var(--bs-teal) ;
  border: 2px solid white;
  border-radius: 10px;
  box-shadow: 10px 10px 10px inset  white;
  width: 300px;
  height: 100px;


}
h1{
  font-family: merriweather;
}

</style>