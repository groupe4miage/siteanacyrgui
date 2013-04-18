<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
    <head>
        <meta http-equiv="Content-Type" content="test/html; charset=utf-8"/>
        <title><?php echo $title_for_layout; ?></title>
    </head>
    <body>
        <header>
            <div style="margin-left: 150px">
                <?php echo $this->Html->image('banniere.png', array('alt' => 'la récré d\'Anacyrgui'));?>
                <div style=" float: right; border: 1px solid red; padding-right: 50px; margin:250px 200px 0px 0px;">
                    <div style="float: left;">
                        <ul>
                        <?php if(AuthComponent::user('id')): ?> 
                            <li><?php echo $this->Html->link("Se deconnecter",array('action'=>'logout','controller'=>'users')); ?></li>
                        <?php else: ?>
                            <li><?php echo $this->Html->link("Se connecter",array('action'=>'login','controller'=>'users')); ?></li>
                            <li><?php echo $this->Html->link("S'inscrire",array('action'=>'signup','controller'=>'users')); ?></li>
                        <?php endif; ?> 
                        </ul>
                    </div>
                    <div style="float: right;margin: 15px 0px 0px 10px;">
                         <?php echo $this->Html->image('sac.png', array('alt' => 'panier'));?>
                    </div>
                </div>
            </div>
           
        </header>
         <div id="menu_horrizontale" style="border: 1px solid red; margin-left: 150px; height: 50px;">
            <ul style="list-style: none; margin-left: 100px;">
                <li style="float: left; margin-left: 50px;"><?php echo $this->Html->link("Accueil",array('controller'=>'')); ?></li>
                <li style="float: left; margin-left: 50px;">Qui sommes nous ?</li>
                <li style="float: left; margin-left: 50px;">Atelier</li>
                <li style="float: left; margin-left: 50px;"><?php echo $this->Html->link("Le conseil de Claudine",array('controller'=>'posts/index_users')); ?></li>
                <li style="float: left; margin-left: 50px;"><?php echo $this->Html->link("Contact",array('controller'=>'contact')); ?></li>
            </ul>
        </div>
        <div>
            <div id="gauche" style="width: 150px; min-height: 150px; border: 1px solid green; float: left;">
                <div id="menu_verticale">  
                     <ul>
                        <li>Bijoux Femme</li>
                        <li>Bijoux Homme</li>
                        <li>Bijoux Enfant</li>
                        <li>Accesoires</li>
                        <li>Piercing</li>
                    </ul>
                </div> 
            </div>
            <div id="corps" style="margin-left: 150px; min-height: 150px; border: 1px solid blue;">
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