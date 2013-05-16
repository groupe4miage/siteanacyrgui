<?php $this->set('title_for_layout','Accueil'); ?>

<!--Gestion de la bande avec les photos -->
<div class="banderole">
    <div class="container">
        <div id="slides">
          <img src="img/Durciceur.png" alt="Photo by: Missy S Link: http://www.flickr.com/photos/listenmissy/5087404401/">
          <img src="img/ParrueE_6.png" alt="Photo by: Daniel Parks Link: http://www.flickr.com/photos/parksdh/5227623068/">
          <img src="img/VernisFluoDisco.png" alt="Photo by: Mike Ranweiler Link: http://www.flickr.com/photos/27874907@N04/4833059991/">
          <img src="img/cartevisite.png" alt="Photo by: Stuart SeegerLink: http://www.flickr.com/photos/stuseeger/97577796/">
        </div>
    </div>
</div>
<!-- Conseil de Claudine -->
<div class="accueil"><div class="accueil_texte">Bienvenue sur le site La Récré d'Anacyrgui,</br></br> Vous trouverez sur ce site l'ensemble 
    des produits présent dans ma boutique ainsi que des conseils personnalisés. 
    N'hésitez pas à me laisser vos commentaires et remarques dans mon livre d'or. </br></br>A bientôt Claudine.</div>
<div>Suivez les conseils de Claudine</div></div>
</br>
<div>
<?php echo $title;?>

<?php echo $body;?>

</div>
 <script>
    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528,
        navigation: false
      });
    });
  </script>
