<template>
 <div class="body">
  <Header />
  <RouterView/>
</div>
</template>

<script setup>
import Header from './components/Header.vue'
</script>

<style >
.body{
  background-image: url("./assets/menu2.jpg");
  background-size: cover;
  
  color: white;
  height: 1200px;
  width: 100vw;
}


</style>