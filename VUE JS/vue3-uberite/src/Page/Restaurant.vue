<template>
    <Router-link to="/">

        <div id="retour">Retour a la Home</div>
    </Router-link>
    <br>
    <div>
        <img :src="restaurant.image" alt="">
    </div>
  <p>{{ restaurant.name  }}</p>
  <p>Note du restaurant  {{ restaurant.note  }}</p>
  <p>Temp de livraison  {{ restaurant.drive_time  }}</p>
</template>

<script>

import Bdd from '../Bdd'
import { useRoute } from 'vue-router'
export default {
name: 'RestaurantVue',
setup(){
    const route = useRoute()
    const restaurant =Bdd.find((restaurant) => restaurant.name === route.params.name)
    return{
        restaurant
    }
}
}
</script>

<style lang="scss" scoped>
#retour{
    margin :25px 45px;
    font-weight: 900;
 
    color: #000;

    & :hover{
font-weight: 900;
    }
}

</style>