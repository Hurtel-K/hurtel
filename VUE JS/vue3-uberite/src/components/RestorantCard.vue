<template>
<div class="restorant--card">
 <div class="restorant--image">

 </div>

 <div class="restorant--information">
  <div class="top">
    <p class="name">{{ info_restaurant.name }}</p>
    <p class="note"><span>{{ info_restaurant.note }}</span></p>
 
  </div>
  <p class="time">{{info_restaurant.drive_time}}</p>

 </div>
</div>
</template>

<script>
export default {
name:"RestorantCard",
props: {info_restaurant: Object}
}
</script>

<style lang="scss">
.restorant--card{
 width: 32%; 
 height: 30vh;

 
 p {
    margin: 0px;
 } 
}
.restorant--image{
    background-image: url("https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8zNzg4MDJiMC1jNTI4LTQ4MjktYjBiNS0wY2M2NDBkZjYzY2QuanBlZw==");
    height: 70%;
    background-size: cover;
    background-position: center;

    }
.restorant--information{ 
    font-family: merriweather;
    .top{
        margin: 10px 0px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        .note{

            background-color: #eeeeee;
            height: 30px;
            width: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            border-radius:50% ;
        }
}
.time{
    font-size: 0.9rem;
}
}


</style>