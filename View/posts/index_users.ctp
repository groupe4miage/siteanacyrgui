<?php $this->set('title_for_layout', 'Voir une actualité'); ?>
<div class="actualite">
    <div class="blogconseil imageconseil">&nbsp;Laissez-vous guider par Claudine ...</div>
    <br>
    <br>
    <!-- C'est ici que nous bouclons sur le tableau $posts afin d'afficher
    les informations des posts -->

    <?php foreach ($data as $post): ?>
        <div class="bulle"> 

            <div class="titre_bulle">
                <?php echo $post['Post']['title']; ?>
                <div class="date_bulle"> 
                    <?php echo $post['Post']['created']; ?>
                </div>
            </div> 

            <div> <?php echo $post['Post']['body']; ?></div>
        </div>
        <br/>
    <?php endforeach; ?>

    <div class="contenu_ecriture">
        <center>
        <?php
        // Montre les numéros de page
        echo $this->Paginator->numbers();
        // Montre les liens précédent et suivant
        echo $this->Paginator->prev('  « Précédent ', null, null, array('class' => 'disabled'));
        echo $this->Paginator->next(' Suivant »', null, null, array('class' => 'disabled'));
        ?>
        </center>
    </div>

</div>