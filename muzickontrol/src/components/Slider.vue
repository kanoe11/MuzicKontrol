<template>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li v-for="(image,index) in listeImage" v-bind:key="index" data-target="#carouselExampleIndicators" :data-slide-to="index"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../assets/img/slider/MK2cropped.jpg" class="d-block w-100" alt="First slide" />
      </div>
      <div class="carousel-item"  v-for="(image,index) in listeImage" v-bind:key="index">
        <img class="d-block w-100" v-bind:src ="path(image)"  alt="Second slide" />
      </div>
    </div>
    <a
      class="carousel-control-prev"
      href="#carouselExampleIndicators"
      role="button"
      data-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a
      class="carousel-control-next"
      href="#carouselExampleIndicators"
      role="button"
      data-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</template>
<script>
export default {
  data () {
    return {
      listeImage: JSON.parse('["808.jpg","MK2cropped.jpg","beatbox2.jpg","keyboard.jpg","korgVolca.jpg","pad.jpg"]')
    }
  },
  methods: {
      path: function(img){
        return '../assets/img/slider/'+img;
      }
    }
}
</script>
