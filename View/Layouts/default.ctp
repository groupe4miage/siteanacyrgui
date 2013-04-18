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
            <div style="margin-left: 150px;">
                <div class="tete">
                </div>
                <div>
                    <div class="panier" style=" height: 500px">
                        <ul>
                        <?php if(AuthComponent::user('id')): ?> 
                            <?php echo $this->Html->link("Se deconnecter",array('action'=>'logout','controller'=>'users')); ?>
                        <?php else: ?>
                            <?php echo $this->Html->link("Se connecter",array('action'=>'login','controller'=>'users')); ?>
                            <?php echo $this->Html->link("S'inscrire",array('action'=>'signup','controller'=>'users')); ?>
                        <?php endif; ?> 
                        </ul>
                    </div>
                   
                </div>
            </div>
        </header>
         <div class="marge" style=" height: 180px;">
            <ul style="list-style: none; margin-left: 100px;">
                <li style="float: left; margin-left: 50px;"><?php echo $this->Html->link("Accueil",array('controller'=>'')); ?></li>
                <li style="float: left; margin-left: 50px;">Qui sommes nous ?</li>
                <li style="float: left; margin-left: 50px;">Atelier</li>
                <li style="float: left; margin-left: 50px;"><?php echo $this->Html->link("Contact",array('controller'=>'contact')); ?></li>
            </ul>
             <div class="logo"> <?php echo $this->Html->image('logoBlanc.png', array('alt' => 'panier'));?></div>
        </div>
        
        <div>
            <div class="navigationcategorie" id="gauche" style="width: 150px; min-height: 150px; float: left;">
                    <ul><b>
                        Catégorie
                     </b></ul>
                <div id="menu_verticale" class="navigationgauche">  
              
                     <ul>
                        Bijoux Femme <br>
                            <br>
                        Bijoux Homme <br>
                            <br>
                        Bijoux Enfant <br>
                            <br>
                        Accesoires <br>
                            <br>
                        Piercing
                    </ul>
                </div> 
                <div class="navigationcategorie">
                    <a href="https://www.facebook.com/LaRecreDAnacyrgui?fref=ts" target="_blank"><?php echo $this->Html->image('fb.png', array('alt' => 'logofb'));?></a>
                    &nbsp;Suivez-nous
      
                </div>
                
            </div>
          
            <div id="corps" style="margin-left: 150px; min-height: 150px;">
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
        <footer>
            <ul style="list-style: none; margin-left: 500px;">
                <li style="float: left; margin-left: 50px;">mention l&eacute;gales</li>
                <li style="float: left; margin-left: 50px;">Condition d'utilisation</li>
            </ul>
        </footer>
		<?php echo $this->element('sql_dump'); ?>
    </body>
</html>