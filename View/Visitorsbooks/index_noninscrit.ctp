<div  class ="titrelivre ">
    Vous souhaitez donner votre avis sur la boutique de Claudine ? Connectez-vous !
</div>
<br> 
<br>
<div  class =" livreor">
    <div class="livreortitre">&nbsp;Livre d'or</div>

    <!-- C'est ici que nous bouclons sur le tableau $posts afin d'afficher
    les informations des posts -->


    <?php foreach ($data as $post): ?>        
        <div style="margin-left: 74%"> 
            <?php echo $post['VisitorsBook']['created']; ?>
        </div>
        <?php echo $post['VisitorsBook']['body']; ?> 
        <br>   _________________________
        <br/>
    <?php endforeach; ?>
</div>
<div style="margin-left: 57%"> 
<?php
// Montre les numéros de page
echo $this->Paginator->numbers();
// Montre les liens précédent et suivant
echo $this->Paginator->prev('  « Précédent ', null, null, array('class' => 'disabled'));
echo $this->Paginator->next(' Suivant »', null, null, array('class' => 'disabled'));
?>
</div>