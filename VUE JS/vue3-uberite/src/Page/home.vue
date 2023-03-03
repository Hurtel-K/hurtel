<template>
  <div class="home">
    <div class="header">
      <img src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats-v2/ee037401cb5d31b23cf780808ee4ec1f.svg" alt="">
      <div class="wrapper--input">
        <input v-model="user_search_restaurant" type="text" placeholder="De quoi avez vous envie ?">
        <div class="search">
          <router-link v-for="(restaurant, i) in search_restaurant" :key="i" :to="{name: 'Restaurant', params :{ name: restaurant.name}}">
            <div  class="container--restaurant--search">
            <div class="wrapper--img">
              <img :src="restaurant.image" alt="">
            </div>
            <p>{{ restaurant.name }}</p>
          </div>
          </router-link>
         
        </div>
      </div>
    </div>
    <div class="banier"></div>
   
<RestaurantRow  v-for="(data, i) in data_restaurant" :key="i" :tree_restaurant="data"/> 
</div>

</template>

<script>  
//import
import Bdd from '../Bdd.js';
import { onMounted, ref, watch } from 'vue';
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
let all_restaurant = [];

const makeDataRestaurant = () => {
 
let tree_restaurant = [];


for (const restaurant of Bdd) {
  const new_restorant =new Restaurant( restaurant.name ,restaurant.note ,restaurant.image ,restaurant.drive_time)
  // make all restaurant arry
  all_restaurant.push(new_restorant);

if( tree_restaurant.length === 2) {
  tree_restaurant.push(new_restorant) ;
  data_restaurant.value.push(tree_restaurant);
  tree_restaurant = [];
} else {
  tree_restaurant.push(new_restorant) ; 
}
 

  }

  }
// user search restaurant
let user_search_restaurant = ref('');
let search_restaurant = ref([]);
watch(user_search_restaurant, new_value => {

  let regex = RegExp(new_value.toLowerCase())

  let new_search_restaurant = all_restaurant.filter( restaurant => regex.test(restaurant.name.toLowerCase()))

  new_value == 0 ?    search_restaurant.value = [] : search_restaurant.value = new_search_restaurant ;
})

onMounted(makeDataRestaurant); 



return {
  data_restaurant,
  user_search_restaurant,
  search_restaurant
}
 },
    
}
</script>

<style lang="scss">
.home{
  .header{
    height: 120px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
     
    img{
      width: 200px;
    }
    .wrapper--input{
      position: relative;
      
      input{
        background-color: #f6f6f6;
        border: none;
        height: 60px;
        width: 400px;
        outline: none;
        padding-left: 20px;
      }
      .search{
      position: absolute;
      top: 100%;
      width: 100%;
      background-color: #ffffff;
      border: solid darkgray 2px;
      box-shadow: 5px 5px 5px darkgray;
      border-radius: 20px;

      .container--restaurant--search{
        display: flex;
        align-items: center;
        padding: 10px;
         
        &:hover{
          background-color:darkgray;
        }

        .wrapper--img{
          height: 60px;
          width: 60px;
          margin-right: 25px;
          overflow: hidden;
          border-radius: 50%;

          img{
            height: 100%;
            width: auto;

          }
        }
      }
      }
    }
  }
  .banier{
    height: 200px;
    width: 100%;
    background-image: url("https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9mOGQ5MjU5ZS00YjIzLTRkNWYtOWQ1YS0wNjBlNjE2NDI4Y2QuanBlZw==");
    // background-color:blue;"https://www.ubereats.com/restaurant/_static/7b308f7cbbf8e335ceda0447a8bd7c63.png"
    background-size: cover;
    background-position: center center;
  }
}
</style>