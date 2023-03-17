<template>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <div class="form">
    <div class="row row3">

      <div class="col-md-6 col-sn">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"> <i class="fas fa-user"></i> Titre</span>
          <input type="text" name="titre" class="form-control" placeholder="Votre titre pour le chapitre" v-model="chapitre">
        </div>
      </div>
      <br>

    </div>
      <div class="boutton" >
    <div><button @click="enregistrer" class="btn btn-primary btn-lg">Ajouter</button></div>
    <div><button @click="Actualiser" class="btn btn-primary btn-lg">Actualiser</button></div>
    <div> <button @click="removeAll" class="btn btn-primary btn-lg">suprimmer</button></div>
  </div>
    <br><br>

    <table>
    <thead>
        <tr>
            <th>Titre</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="(chp, i ) in getChapitres"  :key="i">
            <td>{{ chp}}</td>
            <td><button id="boutton" v-on:click="removeOne(i)" class="btn btn-primary btn-lg">Delete</button></td>
      </tr>
    </tbody>
</table><br>

  </div>
</template>

<script>
          
import { mapGetters ,mapMutations} from "vuex"

export default {

  data() {
    return {
      
      chapitre: ''

    }
  },
    computed: {
    ...mapGetters(['getChapitres'])
    // Chapitres() {
    //   return this.$store.state.store.store.Chapitres
    // }
     
  },
  methods: {


    // showAllChapitres() {
    //   return this.$store.state.store.store.Chapitres;
    // },
    // AddChapitres() {
    //   this.$store.dispatch("store/store/AddChapitres", this.chapitre);
    // },
    // ...mapMutations(['addchapitre']),

       enregistrer() {
 
          this.getChapitres.push(this.chapitre)
          this.chapitre ='';
      //   // 
      // this.$store.commit('addChapitre',chapitre)
      //  this.addchapitre(this.chapitre)
      
    },
    removeAll (){
      this.getChapitres.splice(this.chapitre)
    },
    Actualiser(){
      this.chapitre="" ;
    },
     removeOne (i){
      this.getChapitres.splice(i,1)
    }
  }
  


}
</script>

<style scoped>
.form {
  margin: 200px 40px;
  font-family: merriweather;
  width: 1000px;
}

input {
  font-size: 20px;

}

.enregistrement {
  width: 490px;
  border: 5px solid white;
  border-radius: 10px;
  box-shadow: 5px 5px 5px white;
}

label {
  color: var(--bs-teal);
  font-size: 25px;
  margin: 10px 200px;

}

.donne {
  margin: 0 10px 10px;
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
  width:485px ;
  justify-content: space-between;
 
}
#boutton{
  background-color: red;
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
  width: 490px;

}

</style>