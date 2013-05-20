<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
    <head>
        <meta http-equiv="Content-Type" content="test/html, charset=utf-8"/>
        <title><?php echo $title_for_layout; ?></title>
        <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css('cake.generic');
        echo $this->Html->css('banderole');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->Html->script('jquery-2.0.0.min.js');
        echo $this->Html->script('jquery.slides.min.js');
        echo $this->Html->script('script');
        ?>
    </head>
    <body>
        <header> 
            <div class="ecriture horaire">Du mardi au vendredi de 9h30 à 19h</div>
            <div class="ecriture telephone">06.95.50.35.50</div>
        </header>

        <div class="panier">
            <ul>
                <?php
                if (AuthComponent::user('id') && AuthComponent::user('flag') == 0):
                    ?>
                    <li><?php echo $this->Html->link("Se deconnecter", array('action' => 'logout', 'controller' => 'users')); ?></li>
                    <li><?php echo $this->Html->link("Mon compte", array('action' => 'edit', 'controller' => 'users')); ?></li>
                <?php elseif (AuthComponent::user('id') && AuthComponent::user('flag') == 1): ?>
                    <li><?php echo $this->Html->link("Se deconnecter", array('action' => 'logout', 'controller' => 'users')); ?></li>
                    <li><?php echo $this->Html->link("Ajouter un produit", array('action' => 'add_article', 'controller' => 'products')); ?></li>
                    <li><?php echo $this->Html->link("Créer newsletter", array('action' => 'newsletter', 'controller' => 'users')); ?></li>
                <?php else: ?>
                    <li><?php echo $this->Html->link("Se connecter", array('action' => 'login', 'controller' => 'users')); ?></li>
                    <li><?php echo $this->Html->link("S'inscrire", array('action' => 'signup', 'controller' => 'users')); ?></li>
                <?php endif; ?> 

            </ul>
        </div>

        <?php
        if (AuthComponent::user('flag') == 1):
            $var = 'index_admin';
        else:
            $var = 'index';
        endif;
        ?>

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
                                            <a href="https://www.facebook.com/LaRecreDAnacyrgui?fref=ts" target="_blank"><?php echo $this->Html->image('fb.png', array('alt' => 'logofb')); ?></a>
                                            &nbsp;Suivez-nous
                                        </div>
                                        </div>
                                        <div id="sous_categorie_homme" class="sous_categorie">
                                            <ul>  
                                                <li><?php echo $this->Html->link("Colliers", array('controller' => 'Products', 'action' => $var, 'homme', 'collier'), array('escape' => false)); ?></li><br/>                
                                                <li><?php echo $this->Html->link("Bracelets", array('controller' => 'Products', 'action' => $var, 'homme', 'bracelet'), array('escape' => false)); ?></li><br/>               
                                                <li><?php echo $this->Html->link("Bagues", array('controller' => 'Products', 'action' => $var, 'homme', 'bague'), array('escape' => false)); ?></li><br/>                
                                                <li><?php echo $this->Html->link("Boucles", array('controller' => 'Products', 'action' => $var, 'homme', 'boucle'), array('escape' => false)); ?></li><br/>
                                                <li><?php echo $this->Html->link("Montres", array('controller' => 'Products', 'action' => $var, 'homme', 'montre'), array('escape' => false)); ?></li><br/>
                                            </ul>
                                        </div>
                                        <div id="sous_categorie_femme" class="sous_categorie">
                                            <ul>
                                                <li><?php echo $this->Html->link("Colliers", array('controller' => 'Products', 'action' => $var, 'femme', 'collier'), array('escape' => false)); ?></li><br/>                
                                                <li><?php echo $this->Html->link("Bracelets", array('controller' => 'Products', 'action' => $var, 'femme', 'bracelet'), array('escape' => false)); ?></li><br/>               
                                                <li><?php echo $this->Html->link("Bagues", array('controller' => 'Products', 'action' => $var, 'femme', 'bague'), array('escape' => false)); ?></li><br/>                
                                                <li><?php echo $this->Html->link("Boucles", array('controller' => 'Products', 'action' => $var, 'femme', 'boucle'), array('escape' => false)); ?></li><br/>
                                                <li><?php echo $this->Html->link("Montres", array('controller' => 'Products', 'action' => $var, 'femme', 'montre'), array('escape' => false)); ?></li><br/>
                                                <li><?php echo $this->Html->link("Parrures", array('controller' => 'Products', 'action' => $var, 'femme', 'parrue'), array('escape' => false)); ?></li><br/>
                                            </ul>
                                        </div>
                                        <div id="sous_categorie_enfant" class="sous_categorie">
                                            <ul>
                                                <li><?php echo $this->Html->link("Colliers", array('controller' => 'Products', 'action' => $var, 'enfant', 'collier'), array('escape' => false)); ?></li><br/>                
                                                <li><?php echo $this->Html->link("Bracelets", array('controller' => 'Products', 'action' => $var, 'enfant', 'bracelet'), array('escape' => false)); ?></li><br/>               
                                                <li><?php echo $this->Html->link("Bagues", array('controller' => 'Products', 'action' => $var, 'enfant', 'bague'), array('escape' => false)); ?></li><br/>                
                                                <li><?php echo $this->Html->link("Boucles", array('controller' => 'Products', 'action' => $var, 'enfant', 'boucle'), array('escape' => false)); ?></li><br/>
                                                <li><?php echo $this->Html->link("Montres", array('controller' => 'Products', 'enfant', 'montre'), array('escape' => false)); ?></li><br/>
                                            </ul>
                                        </div>
                                        <div id="sous_categorie_accessoire" class="sous_categorie">
                                            <ul>
                                                <li><?php echo $this->Html->link("Vernis", array('controller' => 'Products', 'action' => $var, 'accessoire', 'vernis'), array('escape' => false)); ?></li><br/>                
                                                <li><?php echo $this->Html->link("Tatouages", array('controller' => 'Products', 'action' => $var, 'accessoire', 'tatouage'), array('escape' => false)); ?></li><br/>               
                                                <li><?php echo $this->Html->link("Faux Ongles", array('controller' => 'Products', 'action' => $var, 'accessoire', 'faux ongles'), array('escape' => false)); ?></li><br/>
                                            </ul>
                                        </div>
                                        <div id="sous_categorie_piercing" class="sous_categorie">
                                            <ul>
                                                <li><?php echo $this->Html->link("Langue", array('controller' => 'Products', 'action' => $var, 'piercing', 'langue'), array('escape' => false)); ?></li><br/>                
                                                <li><?php echo $this->Html->link("Nombril", array('controller' => 'Products', 'action' => $var, 'piercing', 'nombril'), array('escape' => false)); ?></li><br/>
                                                <li><?php echo $this->Html->link("Nez", array('controller' => 'Products', 'action' => $var, 'piercing', 'nez'), array('escape' => false)); ?></li><br/>
                                                <li><?php echo $this->Html->link("Arcade", array('controller' => 'Products', 'action' => $var, 'piercing', 'arcade'), array('escape' => false)); ?></li><br/>
                                            </ul>
                                        </div>
                                        <div class="centre">
                                            <?php
                                            echo $this->Session->flash();
                                            echo $this->fetch('content');
                                            ?>
                                        </div>
                                        <footer>
                                            <div class="menu_footer">
                                                <ul>
                                                    <li><?php echo $this->Html->link("Qui sommes nous ?", array('controller' => 'pages/quisommesnous')); ?></li>
                                                    <?php if (AuthComponent::user('flag') == 1): ?> 
                                                        <li><?php echo $this->Html->link("Les actualités", array('controller' => 'posts/index_admin')); ?></li>
                                                    <?php else: ?>
                                                        <li><?php echo $this->Html->link("Les actualités", array('controller' => 'posts/index_users')); ?></li>
                                                    <?php endif; ?>
                                                    <?php if (AuthComponent::user('id') && AuthComponent::user('flag') == 0): ?> 
                                                        <li><?php echo $this->Html->link("Livre d'or", array('controller' => 'visitorsbooks/index_inscrit')); ?></li>
                                                    <?php elseif (AuthComponent::user('id') && AuthComponent::user('flag') == 1): ?>
                                                        <li><?php echo $this->Html->link("Livre d'or", array('controller' => 'visitorsbooks/index_admin')); ?></li>
                                                    <?php else: ?>
                                                        <li><?php echo $this->Html->link("Livre d'or", array('controller' => 'visitorsbooks/index_noninscrit')); ?></li>
<?php endif; ?> 
                                                    <li><?php echo $this->Html->link("Contact", array('controller' => 'contact')); ?></li>
                                                </ul>
                                            </div>
                                        </footer>
                                        </body>
                                        </html>
                                        <script>
                                            $(document).ready(function() {
                                                //gestion de la résolution.
                                                resolution();
                                                //gestion des clics sur la sous categorie.
                                                $('li[name="categorie_Homme"]').click(function() {
                                                    gestionMenu('sous_categorie_homme', this);
                                                });
                                                $('li[name="categorie_Femme"]').click(function() {
                                                    gestionMenu('sous_categorie_femme', this);
                                                });
                                                $('li[name="categorie_Enfant"]').click(function() {
                                                    gestionMenu('sous_categorie_enfant', this);
                                                });
                                                $('li[name="categorie_Accessoires"]').click(function() {
                                                    gestionMenu('sous_categorie_accessoire', this);
                                                });
                                                $('li[name="categorie_Piercing"]').click(function() {
                                                    gestionMenu('sous_categorie_piercing', this);
                                                });
                                                $('.centre').click(function() {
                                                    disparitionMenu();
                                                });
                                                $('.marge').click(function() {
                                                    disparitionMenu();
                                                });
                                            });
                                        </script>