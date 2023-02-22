<template>
  <RestorantCard/>
  <RestorantCard/>
  <RestorantCard/>
 

 
</template>

<script>
import RestorantCard from './components/RestorantCard.vue';

export default {
  name: 'App',
  components:{
   RestorantCard 
  }
}

</script>

<style>
@import url('./style/reset.css');
@import url('https://fonts.googleapis.com/css2?family=Roboto%3Awght%40300%3B400%3B700&display=swap');
#app {
  font-family: 'Roboto', sans-serif;
}
</style>
