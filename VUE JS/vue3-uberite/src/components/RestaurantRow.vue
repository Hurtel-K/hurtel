<template>
  <div class="restaurant--row">
    <h2 class="title">
        Nos restaurant
   
    </h2>
    <div class="wrapper--card">
        <Router-link class="restaurant--wrapper" v-for="(restaurant, index) in tree_restaurant" :key="index" :to="{name: 'Restaurant', params :{ name: restaurant.name}}">
        <restorant-card :info_restaurant="restaurant"/>
    </Router-link>
    </div>
 </div>
</template>

<script>
import RestorantCard from './RestorantCard.vue';
export default {
name:"RestaurantRow",
components:{
    RestorantCard  
},
props:{
    tree_restaurant: Array
}

}
</script>

<style lang="scss">
.restaurant--row{
    .wrapper--card{
        display: flex;
        align-items: center;
        justify-content: space-between;
        
    }
    .restaurant--wrapper{
        width: 32%;
        text-decoration: none;
        color:green;
    }
}

</style>