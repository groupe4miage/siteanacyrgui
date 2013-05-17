<?php $this->set('title_for_layout','Accueil'); ?>
<div class="accueil"><div class="accueil_texte">Bienvenue sur le site La Récré d'Anacyrgui,</br></br> Vous trouverez sur ce site l'ensemble 
    des produits présents dans ma boutique ainsi que des conseils personnalisés. 
    N'hésitez pas à laisser vos impressions dans mon livre d'or. </br></br>A bientôt Claudine.</div></div>
<!--Gestion de la bande avec les photos -->
<div class="banderole">
    <div class="container">
        <div id="slides">
          <img src="img/banderole/photo1.png" alt="Image 1 introuvable">
          <img src="img/banderole/photo2.png" alt="Image 2 introuvable">
          <img src="img/banderole/photo3.png" alt="Image 3 introuvable">
          <img src="img/banderole/photo4.png" alt="Image 4 introuvable">
        </div>
    </div>
</div>
<!-- Conseil de Claudine -->

<br>
<br>

<div class="Des_conseil" >Suivez les conseils de Claudine</div>
</br>
<div class="Title_conseil" >
    
<?php  echo $title;?>
    </div>
<div class="Body_conseil" >
<?php  echo $body;?>
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
