<template>
    <div class="container">
        <h1 id="partenaires" class="text-center m-3">Partenaires</h1>
        <hr class="w-100" />
        <div class=" partenaire row">
          <div class="col-md-4 mt-4" v-for="image in images" v-bind:key="image">
            <img class="partenairesImg" :src="require('../assets/img/logoIcons/'+image)"/>
            </div>
        </div>
    </div>  
</template>
<script>
    import axios from 'axios'
    export default {
        data() {
            return {
                images: JSON.parse('["Denon Dj.jpg","akai.jpg","artura.jpg","electrovoice.jpg","korg.jpg","mackie.jpg","maudio.jpg","modalElectronics.jpg","moog.jpg","novation.jpg","numark.jpg","ortofon.jpg","presonus.jpg","prodige.jpg","rane.jpg","reloop.jpg","roland.jpg","shure.jpg","udg.jpg","xone.jpg"]')
            }
        }
    }
</script>
<style scoped>

.partenaires {
  display: flex;
}

.partenaires text-center m-5{
  text-align: center;
  width: 100%;
}

.partenairesImg {
  width: 200px;
  height:150px;
}
</style>