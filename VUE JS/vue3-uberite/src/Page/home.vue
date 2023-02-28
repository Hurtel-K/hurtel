<template>
  <div class="home">
   
<RestaurantRow  v-for="(data, i) in data_restaurant" :key="i" :tree_restaurant="data"/>
</div>

</template>

<script>  
//import
import Bdd from '../Bdd.js';
import { onMounted, ref } from 'vue';
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

let data_restaurant = ref([]);

const makeDataRestaurant = () => {
 
let tree_restaurant = [];

for (const restaurant of Bdd) {
  const new_restorant =new Restaurant( restaurant.name ,restaurant.note ,restaurant.image ,restaurant.drive_time)

if( tree_restaurant.length === 2) {
  tree_restaurant.push(new_restorant) ;
  data_restaurant.value.push(tree_restaurant);
  tree_restaurant = [];
} else {
  tree_restaurant.push(new_restorant) ; 
}
 

  }

  }
// console.log(data_restaurant)
onMounted(makeDataRestaurant);



return {
  data_restaurant,
}
 },
    
}
</script>

<style>

</style>