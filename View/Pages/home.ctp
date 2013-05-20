<?php $this->set('title_for_layout', 'Accueil'); ?>
<!--Gestion de la bande avec les photos -->
<div class="banderole">
    <div class="container">
        <div id="slides">
            <img src="img/banderole/photo1.jpg" alt="Image 1 introuvable">
            <img src="img/banderole/photo2.jpg" alt="Image 2 introuvable">
            <img src="img/banderole/photo3.jpg" alt="Image 3 introuvable">
            <img src="img/banderole/photo4.jpg" alt="Image 4 introuvable">
        </div>
    </div>
</div>

<!-- message d'Accueil -->
<div class="accueil">
    <div class="blogconseil accueil_titre ">Une boutique faîtes pour vous ! <?php echo $this->Html->image('papillon.png')?> </div>
    <div class="accueil_texte"><center>Bienvenue sur le site La Récré d'Anacyrgui,</br></br> Vous trouverez sur ce site l'ensemble 
        des produits présents dans ma boutique ainsi que des conseils personnalisés. 
        N'hésitez pas à laisser vos impressions dans mon livre d'or. </br></br>A bientôt Claudine.</center></div>
</div>

<!-- Conseil de Claudine -->
<div class="conseil">
    <div class="blogconseil conseil_titre_general"><?php echo $this->Html->image('papillon.png')?>Suivez nos dernières actualités </div>
    <div class="conseil_titre contenu_ecriture"><?php echo $title; ?></div>
    <div class="Body_conseil contenu_ecriture" ><center><?php echo $body; ?></center></div>
    <div class="conseil_lien"><?php echo $this->Html->link("Plus d'infos...", array('controller' => 'posts/index_users')); ?></div>
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
