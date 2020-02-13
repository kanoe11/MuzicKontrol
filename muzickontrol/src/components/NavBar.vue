<template>
      <nav class="navbar navMenu navbar-expand-lg navbar-white  fixed-top" id="mainNav">
    <div class="container">
      <router-link to="/home" class="nav-link js-scroll-trigger"><img class="logo" src="img/logo.jpg" alt="logo"></router-link>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
          <li class="nav-item">
            <router-link to="/service" class="nav-link js-scroll-trigger"> Services</router-link>
          </li>
          <li class="nav-item">
             <router-link to="/contact" class="nav-link js-scroll-trigger">Contact</router-link>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#evenements">Evénement</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#decouverte">Découverte</a>
          </li>
          <li class="nav-item">
            <router-link to="/partenaires" class="nav-link js-scroll-trigger">Partenaires</router-link>
          </li>
          <li class="nav-item">
             <router-link to="/article/" class="nav-link js-scroll-trigger">Article</router-link>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>
<script>
export default {
}
</script>
<style scoped>
#mainNav {
  font-family: fantasy;
  font-size: 20px;
}
  .navbar .navbar-expand-lg {
    color:whitesmoke;
}
.navMenu {
    background-color:#0A090C;
}

.navMenu .nav-link:hover{
    color: #909691;
}

.navbar-nav > li{
    padding-left:20px;
    padding-right:20px;
  }

  .navbar-nav > li{
    margin-left:20px;
    margin-right:20px;
  }

  .navbar-nav>li{
    border-right: 1px solid #F9F9FD;
  }

</style>
