<template>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <div class="header">
<ul class="links">
    <router-link class="li" to="/" >Aceuil</router-link>
    <router-link class="li" to="/chapitre" >Ajouter Un Chapitre</router-link>
    <router-link class="li" to="/article" >Ajouter Un Article</router-link>
</ul>
</div>

</template> 

<script setup>
 
</script> 
 
<style >
.header{
    padding-top: 30px;
}
.header .links{
    display: flex;
    font-family: redressed;
    font-size: 30px;
    text-decoration: none;

}
.header .links .li {
    margin-right: 100px;
    font-weight: 800;
    text-decoration: none;
    color:white;
    
}


</style>