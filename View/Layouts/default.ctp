<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
    <head>
       <?php
            echo $this->Html->meta('icon');
            echo $this->Html->css('cake.generic');
            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
       ?>
        <meta http-equiv="Content-Type" content="test/html; charset=utf-8"/>
        <title><?php echo $title_for_layout; ?></title>
    </head>
    <body>
         <header>
            <div class="panier">
                <ul>
                <?php if(AuthComponent::user('id')): ?> 
                    <?php echo $this->Html->link("Se deconnecter",array('action'=>'logout','controller'=>'users')); ?>
                <?php else: ?>
                    <?php echo $this->Html->link("Se connecter",array('action'=>'login','controller'=>'users')); ?>
                    <?php echo $this->Html->link("S'inscrire",array('action'=>'signup','controller'=>'users')); ?>
                <?php endif; ?> 
                </ul>
            </div>
        </header>
         <div class="marge">
            <ul>
                <li><?php echo $this->Html->link("Accueil",array('controller'=>'')); ?></li>
                <li><?php echo $this->Html->link("Qui sommes nous ?",array('quisommesnous')); ?></li>
                <li>Atelier</li>
                 <li><?php echo $this->Html->link("Le conseil de Claudine",array('controller'=>'posts/index_users')); ?></li>
                <li><?php echo $this->Html->link("Contact",array('controller'=>'contact')); ?></li>
            </ul>
             <div class="logo"> <?php echo $this->Html->image('logoBlanc.png', array('alt' => 'panier'));?></div>
        </div>
        
        <div>
            <div class="navigationcategorie">
                <ul>
                    <b>Catégorie</b>
                </ul>
                <div id="menu_verticale" class="navigationgauche">  
                    <ul>
                       <?php echo $this->Html->link("Bijoux femme",array('controller'=>'products/index')); ?><br><br>
                       Bijoux Homme <br><br>
                       Bijoux Enfant <br><br>
                       Accesoires <br><br>
                       Piercing
                   </ul>
                </div> 
                <div class="navigationcategorie">
                    <a href="https://www.facebook.com/LaRecreDAnacyrgui?fref=ts" target="_blank"><?php echo $this->Html->image('fb.png', array('alt' => 'logofb'));?></a>
                    &nbsp;Suivez-nous
                </div>
            </div>
            <div class='centre'>
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
        <footer class="bas">
            <div class="gauche_footer">
                <div class="title_footer">Mentions L&eacute;gales</div>
                <div class="contenu_footer">contenu mentions légales</div>
            </div>
            <div class="centre_footer">
                <div class="title_footer">Ouverture</div>
                <div class="contenu_footer">Du mardi au samedi<br>9H30 à 19H</div>
            </div>
            <div class="droite_footer">  
               <div class="title_footer">Contact </div>
               <div class="contenu_footer"> 06 95 50 35 50<br><br>7 rue saint simon<br>33390 Blaye<br></div>
            </div>
            <div class="papillon">
                <?php echo $this->Html->image('papillon.png')?> 
            </div>
        </footer>
        <?php echo $this->element('sql_dump'); ?>
    </body>
</html>