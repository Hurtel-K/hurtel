<template>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="form">
        <div class="row row3">
          <div class="col-md-6 col-sn">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> <i class="fas fa-user"></i> </span>
            <input type="text" name ="titre" class=" input" placeholder="Votre titre pour l'article" v-model="article.titre" >
          </div>

          <div class="col-md-6 col-sn">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> <i class="fas fa-user"></i> </span>
            <input type="text" name ="nom" class="form-control" placeholder="votre nom pour l'article" v-model=" article.nom">
          </div>

          <div class="input-group">
            <span class="input-group-text">Contenue </span>
            <textarea class="form-control " name="content" aria-label="With textarea" placeholder="votre contenu pour l'article" v-model="article.content"></textarea>
          </div><br>

<br>
    
</div>
</div>
</div>
<button  @click="add" class="btn btn-primary btn-lg">Ajouter</button>
<p v-for="(art, i ) in articles"  :key="i">{{ art.titre}} {{ art.nom}} {{ art.content}}</p>
</div>
</template>

<script>
export default {
  
  data(){
    return{
   articles : [],

   article :{
     titre:'',
     nom:'',
     content:''
   }
    

    }
  },
  
  methods:{

    add(){
      this.articles.push(this.article);
      
      this.article = {};
    }
  } 


}
</script>

<style scoped>
.form{
    margin: 200px 40px;
    font-family:merriweather;
    
}
.input{
  width: 350px;
  border-radius: 6px;
  font-size: 20px;
  border: none;
}

</style>