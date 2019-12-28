
$( document ).ready(function() {
  init();
  getimages();
  (function($) {
    "use strict"; // Start of use strict
  
    // animation navigation ( navbar)
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
      //quand je clique sur un lien  du navbar mais section de la page ex #services 
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: (target.offset().top - 56)
          }, 1000, "easeInOutExpo");
          return false;
        }
      }
    });
  
    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function() {
      $('.navbar-collapse').collapse('hide');
    });
  
    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
      target: '#mainNav',
      offset: 56
    });
  })(jQuery); // End of use strict
});
function init() {

  var services = [
  {
   image :'<i class="fas fa-euro-sign fa-2x"></i>',
   title: "Paiement 3X sans frais",
   description : "Votre magasin vous offre la possibilité de régler vos achats en 3X sans frais a partir de 150€ à l'aide d'un RIB et d'une piece d'identité."
  },
  {
    image :'<i class="fas fa-volume-up fa-2x"></i>',
    title : "Installation de systèmes de sonorisation",
    description: "Installation de systèmes pour magasin ,restaurant ,Bar. La sonorisation de restaurant ou de bar répond à des besoins bien spécifiques. L'enjeu est d'obtenir une sono capable de diffuser de la musique d'ambiance de façon agréable, avec un son parfait et un volume égal,homogène dans tout le restaurant, après étude et devis a la clés ,Music kontrol propose des solutions simple et bon marché."
  },
  {
    image : '<i class="fas fa-shipping-fast fa-2x"></i>',
    title: "Livraison",
    description : "Votre A partir de 2OO€ ,après conseil en magasin les produits choisi ou sélectionné par vos soins sur catalogue peuvent être livré a votre domicile gratuitement. vous offre la possibilité de régler vos achats en 3X sans frais a partir de 150€ à l'aide d'un RIB et d'une piece d'identité."
   },
   {
    image :'<i class="far fa-handshake fa-2x"></i>',
    title: "Location son et lumière",
    description : "Votre A Un anniversaire ,un mariage,un événement ou le son et la lumière est essentiel. Music kontrol est present pour vos événements avec des systèmes professionnel et simple d'utilisation a des prix attractif. de 2OO€ ,après conseil en magasin les produits choisi ou sélectionné par vos soins sur catalogue peuvent être livré a votre domicile gratuitement. vous offre la possibilité de régler vos achats en 3X sans frais a partir de 150€ à l'aide d'un RIB et d'une piece d'identité."
   },
   {
    image: '<i class="fas fa-tools fa-2x"></i>',
    title: "Location Reparations et nettoyage platine mk2 et lumière",
    description : "Problème avec une vieille platine Technics mk2,changement de la masse, de cable RCA ,nettoyage complet de votre platine. A Un anniversaire ,un mariage,un événement ou le son et la lumière est essentiel. Music kontrol est present pour vos événements avec des systèmes professionnel et simple d'utilisation a des prix attractif. de 2OO€ ,après conseil en magasin les produits choisi ou sélectionné par vos soins sur catalogue peuvent être livré a votre domicile gratuitement. vous offre la possibilité de régler vos achats en 3X sans frais a partir de 150€ à l'aide d'un RIB et d'une piece d'identité."
   },
];

for (let i=0; i<services.length; i+=1) {
  let image = '';
  var contenu =  services[i].description;
  if(services[i].image !== undefined && services[i].image !== '' ) {
    image = '<div class="text-center mt-4">'+ services[i].image + '</div>';
  }
  if (services[i].description.length > services[0].description.length ){
    var desc =  services[i].description;
    var element =  desc.substring(0,services[0].description.length); 
    contenu = element;

 }
  let content = ' <div class="col-md-4 mt-4"><div class="card transition">'+ image +'<div class="card-body "><h5 class="card-title">| '+ services[i].title+' |</h5>'+'<div class="card-text">'+contenu+'</div></div></div></div>';
   
  $('.services').append(content);
  //$('tooltip').append(content);
 }
}

function getimages(){
  $.ajax({
      url:'files.php',
      type: 'POST',
      success: function (data){  
        var tab =  JSON.parse(data);
        for (let i=0; i<tab.length; i+=1) {
          let image = '';
          image = '<img class="partenairesImg" src="'+tab[i]+'" />';
          let content = ' <div class="col-md-4 mt-4">'+image+'</div>';     
          $('.partenaire').append(content);
          }
    },
    error: function(resultat,statut){
      alert('erreur non envoyer');
    }
  })
};