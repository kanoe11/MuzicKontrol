<template>
    <div class="container">
        <h1 id="partenaires" class="text-center m-3">Partenaires</h1>
        <hr class="w-100" />
        <div class=" partenaire row">
          <div class="col-md-4 mt-4" v-for="image in images" v-bind:key="image">
            <img class="partenairesImg" src="image"/>
            </div>
        </div>
    </div>  
</template>
<script>
    import axios from 'axios'
    export default {
        data() {
            return {
                images: JSON.parse('["..\/img\/logoIcons\/Denon Dj.jpg","..\/img\/logoIcons\/akai.jpg","..\/img\/logoIcons\/artura.jpg","..\/img\/logoIcons\/beyerdynamic.jpg","..\/img\/logoIcons\/electrovoice.jpg","..\/img\/logoIcons\/korg.jpg","..\/img\/logoIcons\/mackie.jpg","..\/img\/logoIcons\/maudio.jpg","..\/img\/logoIcons\/modalElectronics.jpg","..\/img\/logoIcons\/moog.jpg","..\/img\/logoIcons\/novation.jpg","..\/img\/logoIcons\/numark.jpg","..\/img\/logoIcons\/ortofon.jpg","..\/img\/logoIcons\/presonus.jpg","..\/img\/logoIcons\/prodige.jpg","..\/img\/logoIcons\/rane.jpg","..\/img\/logoIcons\/reloop.jpg","..\/img\/logoIcons\/roland.jpg","..\/img\/logoIcons\/shure.jpg","..\/img\/logoIcons\/udg.jpg","..\/img\/logoIcons\/xone.jpg"]')
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