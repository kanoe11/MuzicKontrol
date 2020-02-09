<template>
  <div class="col-md-4 mt-4">
    <div v-for="service in services" v-bind:key="service.title" class="card transition">
       <i v-bind:class="service.image"></i>
      <div class="card-body">
        <h5 class="card-title">| {{service.title}} |</h5>
        <div class="card-text">{{service.description}}</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
    name:'Service',
    data:function(){
        return {
          services:[
            {
                image :'fas fa-euro-sign fa-2x',
                title: "Paiement 3X sans frais",
                description : "Votre magasin vous offre la possibilité de régler vos achats en 3X sans frais a partir de 150€ à l'aide d'un RIB et d'une piece d'identité."
            },
            {
                image :'fas fa-volume-up fa-2x',
                title : "Installation de systèmes de sonorisation",
                description: "Installation de systèmes pour magasin ,restaurant ,Bar. La sonorisation de restaurant ou de bar répond à des besoins bien spécifiques. L'enjeu est d'obtenir une sono capable de diffuser de la musique d'ambiance de façon agréable, avec un son parfait et un volume égal,homogène dans tout le restaurant, après étude et devis a la clés ,Music kontrol propose des solutions simple et bon marché."
            },
            {
                image : 'fas fa-shipping-fast fa-2x',
                title: "Livraison",
                description : "Votre A partir de 2OO€ ,après conseil en magasin les produits choisi ou sélectionné par vos soins sur catalogue peuvent être livré a votre domicile gratuitement. vous offre la possibilité de régler vos achats en 3X sans frais a partir de 150€ à l'aide d'un RIB et d'une piece d'identité."
            },
            {
                image :'far fa-handshake fa-2x',
                title: "Location son et lumière",
                description : "Votre A Un anniversaire ,un mariage,un événement ou le son et la lumière est essentiel. Music kontrol est present pour vos événements avec des systèmes professionnel et simple d'utilisation a des prix attractif. de 2OO€ ,après conseil en magasin les produits choisi ou sélectionné par vos soins sur catalogue peuvent être livré a votre domicile gratuitement. vous offre la possibilité de régler vos achats en 3X sans frais a partir de 150€ à l'aide d'un RIB et d'une piece d'identité."
            },
            {
                image: 'fas fa-tools fa-2x',
                title: "Location Reparations et nettoyage platine mk2 et lumière",
                description : "Problème avec une vieille platine Technics mk2,changement de la masse, de cable RCA ,nettoyage complet de votre platine. A Un anniversaire ,un mariage,un événement ou le son et la lumière est essentiel. Music kontrol est present pour vos événements avec des systèmes professionnel et simple d'utilisation a des prix attractif. de 2OO€ ,après conseil en magasin les produits choisi ou sélectionné par vos soins sur catalogue peuvent être livré a votre domicile gratuitement. vous offre la possibilité de régler vos achats en 3X sans frais a partir de 150€ à l'aide d'un RIB et d'une piece d'identité."
            }
            ],
          
        }
    }
}
</script>