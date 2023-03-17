<template>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="form">
        <div class="row row3">
          <div class="col-md-6 col-sn">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Titre </span>
            <input type="text" name ="titre" class=" input" placeholder="Votre titre pour l'article" v-model="article.titre" >
          </div>
          

          
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">  Nom</span>
            <input type="text" name ="nom" class="input" placeholder="votre nom pour l'article" v-model=" article.nom">
          </div>

          <div class="input-group">
            <span class="input-group-text">Contenue </span>
            <textarea class="imput" name="content" aria-label="With textarea" placeholder="votre contenu pour l'article" v-model="article.content"></textarea>
          </div><br>
          
          <div class="input-group">
            <span class="input-group-text">Chapitre</span>
          <select  name="chapitre" class="imput" aria-label="Default select example" v-model="article.chapitre" >
            
            <option  selected >votre chapitre pour l'article</option>
            
   
      <option  v-for="(chp, i ) in getChapitres " :key="i"   > {{ chp }}  </option>
          
          
          </select>
        </div>
        
          <br>

<br>
    
</div>
</div>




<div class="boutton" >
     <div><button @click="add" class="btn btn-primary btn-lg">Ajouter</button></div>
     <div><button @click="Actualiser" class="btn btn-primary btn-lg">Actualiser</button></div>
     <div><button @click="removeAll" class="btn btn-primary btn-lg">suprimmer</button></div>
  </div><br><br>
<table>
    <thead>
        <tr>
            <th>Titre</th>
            <th>Nom</th>
            <th>Content</th>
            <th>Chapitre</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="(art, i ) in articles"  :key="i">
            <td>{{ art.titre}}</td>
            <td>{{ art.nom}}</td>
            <td>{{ art.content}}</td>
            <td>{{ art.chapitre}}</td>
            <td><button id="boutton" v-on:click="removeOne(i)" class="btn btn-primary btn-lg">Delete</button> </td>
           
        </tr>
    </tbody>
</table>

<br><br>

</div>
</template>

<script>

import { mapGetters } from 'vuex';


export default {
  data(){
    return{
   
   

   articles : [],

   article :{
     titre:'',
     nom:'',
     content:'',
     chapitre:''
    
   }}
  },
   computed: {
    ...mapGetters(['getChapitres'])
  },
  
  methods:{

    add(){
      this.articles.push(this.article);
      
      this.article = {};
    },
    Actualiser(){
      this.article = {} ;
    },
    removeAll (){
      this.articles.splice(this.article)
    },
    removeOne (i){
      this.articles.splice(i,1)
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
  width: 400px;
  border-radius: 6px;
  font-size: 20px;
  border: none;
}
.imput{
  width: 350px;
  border-radius: 6px;
  font-size: 20px;
  border: none;
}

td{
  border: white 2px solid;
  
}

th{
  border: white 2px solid;
  color:var(--bs-teal);

  
}
table{
  font-size: 30px;
  width: 1500px;

}
button{
  background-color:var(--bs-teal) ;
}
span{
  color:var(--bs-teal) ;
  font-size: 20px;
  font-weight:980;

}
.boutton{
  display: flex;
  width:470px ;
  justify-content: space-between;
 
}
#boutton{
  background-color: red;
}





</style>