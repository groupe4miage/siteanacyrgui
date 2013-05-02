<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
    <head>
       <?php
            echo $this->Html->meta('icon');
            echo $this->Html->css('cake.generic');
            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->Html->script('jquery-2.0.0.min.js');
            echo $this->Html->script('script');
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
                    <?php echo $this->Html->link("Mon compte",array('action'=>'edit','controller'=>'users')); ?>
                <?php else: ?>
                    <?php echo $this->Html->link("Se connecter",array('action'=>'login','controller'=>'users')); ?>
                    <?php echo $this->Html->link("S'inscrire",array('action'=>'signup','controller'=>'users')); ?>
                <?php endif; ?> 
                </ul>
            </div>
        </header>
         <div class="marge">
            <ul>
                <li><?php echo $this->Html->link("Accueil",array('controller'=>'pages/home')); ?></li>
                <li><?php echo $this->Html->link("Qui sommes nous ?",array('controller'=>'pages/quisommesnous')); ?></li>
                <li><?php echo $this->Html->link("Les actualités",array('controller'=>'posts/index_users')); ?></li>
                <?php if(AuthComponent::user('id')): ?> 
                <li><?php echo $this->Html->link("Livre d'or",array('controller'=>'visitorsbooks/index_inscrit')); ?></li>
                <?php else : ?>
                  <li><?php echo $this->Html->link("Livre d'or",array('controller'=>'visitorsbooks/index_noninscrit')); ?></li>
                  <?php  endif; ?> 
                <li><?php echo $this->Html->link("Contact",array('controller'=>'contact')); ?></li>
            </ul>
             <div class="logo"> <?php echo $this->Html->image('logoBlanc.png', array('alt' => 'panier'));?></div>
        </div>
        

        <div class="navigationcategorie">
            <b>Cat&eacute;gories</b>
            <div id="menu_verticale" class="navigationgauche">  
                <ul>
                    <li name="categorie_Homme">Homme</li><br>       
                    <li name="categorie_Femme">Femme</li><br>       
                    <li name="categorie_Enfant">Enfant</li><br>       
                    <li name="categorie_Accessoires">Accessoires</li><br>       
                    <li name="categorie_Piercing">Piercing</li><br> 
               </ul>
            </div> 

            <div class="navigationcategorie">
                <a href="https://www.facebook.com/LaRecreDAnacyrgui?fref=ts" target="_blank"><?php echo $this->Html->image('fb.png', array('alt' => 'logofb'));?></a>
                &nbsp;Suivez-nous
            </div>
        </div>
        <div id="sous_categorie_homme" class="sous_categorie">
            <ul>  
                <li><?php echo $this->Html->link("Colliers",array('controller'=>'Products','homme','collier'),
               array('escape' => false)); ?></li><br/>                
                <li><?php echo $this->Html->link("Bracelets",array('controller'=>'Products','homme','bracelet'),
               array('escape' => false)); ?></li><br/>               
                <li><?php echo $this->Html->link("Bagues",array('controller'=>'Products','homme','bague'),
               array('escape' => false)); ?></li><br/>                
                <li><?php echo $this->Html->link("Boucles",array('controller'=>'Products','homme','boucle'),
               array('escape' => false)); ?></li><br/>
                <li><?php echo $this->Html->link("Montres",array('controller'=>'Products','homme','montre'),
               array('escape' => false)); ?></li><br/>
            </ul>
         </div>
        <div id="sous_categorie_femme" class="sous_categorie">
            <ul>
                 <li><?php echo $this->Html->link("Colliers",array('controller'=>'Products','femme','collier'),
               array('escape' => false)); ?></li><br/>                
                <li><?php echo $this->Html->link("Bracelets",array('controller'=>'Products','femme','bracelet'),
               array('escape' => false)); ?></li><br/>               
                <li><?php echo $this->Html->link("Bagues",array('controller'=>'Products','femme','bague'),
               array('escape' => false)); ?></li><br/>                
                <li><?php echo $this->Html->link("Boucles",array('controller'=>'Products','femme','boucle'),
               array('escape' => false)); ?></li><br/>
                <li><?php echo $this->Html->link("Montres",array('controller'=>'Products','femme','montre'),
               array('escape' => false)); ?></li><br/>
                <li><?php echo $this->Html->link("Parrures",array('controller'=>'Products','femme','parrue'),
               array('escape' => false)); ?></li><br/>
            </ul>
         </div>
        <div id="sous_categorie_enfant" class="sous_categorie">
            <ul>
               <li><?php echo $this->Html->link("Colliers",array('controller'=>'Products','enfant','collier'),
               array('escape' => false)); ?></li><br/>                
                <li><?php echo $this->Html->link("Bracelets",array('controller'=>'Products','enfant','bracelet'),
               array('escape' => false)); ?></li><br/>               
                <li><?php echo $this->Html->link("Bagues",array('controller'=>'Products','enfant','bague'),
               array('escape' => false)); ?></li><br/>                
                <li><?php echo $this->Html->link("Boucles",array('controller'=>'Products','enfant','boucle'),
               array('escape' => false)); ?></li><br/>
                <li><?php echo $this->Html->link("Montres",array('controller'=>'Products','enfant','montre'),
               array('escape' => false)); ?></li><br/>
            </ul>
         </div>
        <div id="sous_categorie_accessoire" class="sous_categorie">
            <ul>
               <li><?php echo $this->Html->link("Vernis",array('controller'=>'Products','accessoire','vernis'),
               array('escape' => false)); ?></li><br/>                
                <li><?php echo $this->Html->link("Tatouages",array('controller'=>'Products','accessoire','tatouage'),
               array('escape' => false)); ?></li><br/>               
                <li><?php echo $this->Html->link("Faux Ongles",array('controller'=>'Products','accessoire','faux ongles'),
               array('escape' => false)); ?></li><br/>
            </ul>
         </div>
        <div id="sous_categorie_piercing" class="sous_categorie">
            <ul>
                <li><?php echo $this->Html->link("Langue",array('controller'=>'Products','piercing','langue'),
               array('escape' => false)); ?></li><br/>                
                <li><?php echo $this->Html->link("Nombril",array('controller'=>'Products','piercing','nombril'),
               array('escape' => false)); ?></li><br/>
               <li><?php echo $this->Html->link("Nez",array('controller'=>'Products','piercing','nez'),
               array('escape' => false)); ?></li><br/>
                <li><?php echo $this->Html->link("Arcade",array('controller'=>'Products','piercing','arcade'),
               array('escape' => false)); ?></li><br/>
            </ul>
         </div>
        <div class="centre">
            <?php 
                echo $this->Session->flash(); 
                echo $this->fetch('content');
            ?>
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
<script>
    $(document).ready(function() {
        $('li[name="categorie_Homme"]').click(function(){
            
            gestionMenu('sous_categorie_homme',this);
        });
        $('li[name="categorie_Femme"]').click(function(){
            gestionMenu('sous_categorie_femme',this);
        });
        $('li[name="categorie_Enfant"]').click(function(){
            gestionMenu('sous_categorie_enfant',this);
        });
        $('li[name="categorie_Accessoires"]').click(function(){
            gestionMenu('sous_categorie_accessoire',this);
        });
        $('li[name="categorie_Piercing"]').click(function(){
            gestionMenu('sous_categorie_piercing',this);
        });
        $('.centre').click(function(){
           disparitionMenu();
        });
        $('.marge').click(function(){
           disparitionMenu();
        });
    });
</script>