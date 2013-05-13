<div  class ="titrelivre ">
    Vous souhaitez donner votre avis sur la boutique de Claudine ? 
    <br>Connectez vous !

</div>
<div  class =" livreor">
    <h1 class="livreortitre">&nbsp;Livre d'or</h1>

    <!-- C'est ici que nous bouclons sur le tableau $posts afin d'afficher
    les informations des posts -->


    <?php foreach ($data as $post): ?>
        <div class=""> 
            <div>
                <div class=" ">
                    <div style="margin-left: 45%"> 
                        <?php echo $post['VisitorsBook']['created']; ?>
                    </div>
                    <?php echo nl2br($post['VisitorsBook']['body']); ?> 
                    <br>   _________________________
                </div> 
            </div>
        </div>
        <br/>
    <?php endforeach; ?>

    <?php
// Montre les numéros de page
    echo $this->Paginator->numbers();

// Montre les liens précédent et suivant
    echo $this->Paginator->prev('  « Précédent ', null, null, array('class' => 'disabled'));
    echo $this->Paginator->next(' Suivant »', null, null, array('class' => 'disabled'));
    ?>
</div>