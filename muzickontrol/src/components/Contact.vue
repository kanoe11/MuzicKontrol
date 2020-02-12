<template>
<footer class="py-5 footerMenu">
    <div class="container">
      <div class="row>">
        <div class="col-md-4">
          <div id="contact" class="contact text-center">
            <h1 class="text-white m-3">Contact</h1>
            <hr class="w-100" />
            <div class="d-flex flex-row">
              <div class="p-1">
                <p><i class="fas fa-map-marker-alt fa-2x"></i></p>
              </div>
              <div class="p-1">
                <a href="https://goo.gl/maps/qUKwzLYqT5oHEsaL7">92 Rue St Dizier Nancy, France</a>
              </div>
            </div>

            <div class="d-flex flex-row">
              <div class="p-1">
                <p><i class="fa fa-phone fa-2x"></i></p>
              </div>
              <div class="p-1"></div><a href="tel:+33354162451">+33 3 54 16 24 51 </a>
            </div>
          </div>
          <div class="d-flex flex-row">
            <div class="p-1">
              <p><i class="fab fa-instagram fa-2x"></i></p>
            </div>
            <div class="p-1"><a href="https://www.instagram.com/musickontrol">Instagram</a></div>
          </div>

          <div class="d-flex flex-row">
            <div class="p-1"><i class="fab fa-facebook fa-2x"></i></div>
            <div class="p-1"><a
                href="https://fr-fr.facebook.com/pages/category/Electronics-Store/Music-Kontrol-170296356950248/">Facebook</a>
            </div>
          </div>
          <div class="d-flex flex-row">
            <div class="p-1"><i class="fas fa-envelope fa-2x"></i></div>
            <div class="p-1"><a href="musickontrol@sfr.fr">musickontrol@sfr.fr</a></div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>
<script>
export default {
    
}
</script>
<style scoped>


.contact a p i {
margin-left: 1em;
}

.footerMenu{
  background-color:#0A090C;
}

.fa-instagram{
 color:#e4405f;
}

.fa-facebook{
 color:#3b5998;
}

.fa-map-marker-alt{
 color:#15aabf;
}

.fronttext{
  color: 	#877466;
  font-family: 'Permanent Marker', cursive;
  font-size: 90px;
}


</style>