<template>
  <div class="home">
<RestaurantRow/>
  </div>
</template>

<script>
//import
import Bdd from '../Bdd.js';
import { onMounted } from 'vue';
 //components
import RestaurantRow from '../components/RestaurantRow.vue';
export default {
     name:'HomeVue',
     components:{
        RestaurantRow
     },

     setup() {
        
    class Restaurant{
        constructor (name, note, image, drive_time){
         this.name=name  
         this.note=note
         this.image=image
         this.drive_time=drive_time
        }
    }

let data_restaurant =[]

const makeDataRestaurant = () => {
 
let tree_restaurant =[];

for (const restaurant of Bdd) {
  const new_restorant =new Restaurant( restaurant.name ,restaurant.note ,restaurant.image ,restaurant.drive_time)

if( tree_restaurant.length ===2){
  tree_restaurant.push(new_restorant) ;
  data_restaurant.push(tree_restaurant);
  tree_restaurant=[];
}else{
  tree_restaurant.push(new_restorant) ; 
}
 

  }

  }

onMounted(makeDataRestaurant);
 }
    
}
</script>

<style>

</style>