<template>
  <div class="restaurant--row">
    <h2 class="title">
        Nos restaurant
    </h2>
    <div class="wrapper--card">
       <restorant-card v-for="(card, index) in 3" :key="index"/>
    </div>
 </div>
</template>

<script>
import RestorantCard from './RestorantCard.vue';
export default {
name:"RestaurantRow",
components:{
    RestorantCard
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

}

</style>