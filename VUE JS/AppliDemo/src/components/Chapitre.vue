<template>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  <div class="form">
        <div class="row row3">
       
          <div class="col-md-6 col-sn">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> <i class="fas fa-user"></i> </span>
            <input type="text" name ="titre" class="form-control" placeholder="Votre titre pour le chapitre" v-model="chapitre" >
          </div>
          </div>
          <br>  
    
       </div>  
       <button @click="enregistrer" class="btn btn-primary btn-lg">Ajouter</button>
      
    <div v-for="(chp, i ) in chapitres"  :key="i">{{ chp }}</div>
      </div>
</template>

<script>

export default { 

  data(){
    return{
   chapitres : [],

   chapitre :''

    }
  },
  
  methods:{

    enregistrer(){
      this.chapitres.push(this.chapitre)
      this.chapitre = '' ;
    }
  } 


}
</script>

<style scoped>
.form{
  margin: 200px 40px;
  font-family:merriweather;
  width: 1000px;
}
input{
  font-size: 20px;
  

}

</style>