<h1 class="blogconseil livreor">&nbsp;Livre d'or</h1>

<!-- C'est ici que nous bouclons sur le tableau $posts afin d'afficher
les informations des posts -->



Vous souhaitez donner votre avis sur la boutique de Claudine ? Connectez vous !
<br>
<br>

<?php foreach ($data as $post): ?>
    <div class="bulle"> 
        <div>
            <div class="titre_bulle">
                <?php echo $post['VisitorsBook']['body']; ?>
                <div class="date_bulle"> 
                    <?php echo $post['VisitorsBook']['created']; ?>
                </div>
            </div>  
        </div>
    </div>
<?php echo $this->Form->postLink(
                'Supprimer',
                array('action' => 'delete', $post['VisitorsBook']['id']),
                    
                array('confirm' => 'Etes-vous sûr ?'));
            ?>
    <br/>
<?php endforeach; ?>

<?php
// Montre les numéros de page
echo $this->Paginator->numbers();

// Montre les liens précédent et suivant
echo $this->Paginator->prev('  « Précédent ', null, null, array('class' => 'disabled'));
echo $this->Paginator->next(' Suivant »', null, null, array('class' => 'disabled'));

?>
