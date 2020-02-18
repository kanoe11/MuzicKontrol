<template>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img  src="../assets/img/slider/MK2cropped.jpg" class="d-block w-100" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../assets/img/slider/pad.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../assets/img/slider/beatbox2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../assets/img/slider/korgVolca.jpg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class=" d-block w-100" src="../assets/img/slider/Focuswrite.png" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
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
    path: function (img){
        return '../assets/img/slider/'+img;
      }
    }
}
</script>
