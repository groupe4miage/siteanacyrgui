<?php $this->set('title_for_layout', 'Gestion des actualités'); ?>
<div class="actualite">
    <div class="blogconseil imageconseil">&nbsp;Laissez-vous guider par Claudine ...</div>
    <br>
    <br>
    <!-- C'est ici que nous bouclons sur le tableau $posts afin d'afficher
    les informations des posts -->

    <?php echo $this->Html->link($this->Html->image("add.png", array("alt" => "Ajouter un post")), array('controller' => 'posts', 'action' => 'add'), array('escape' => FALSE)); ?>
    <?php foreach ($data as $post): ?>
        <div class="bulle"> 
            <div class="titre_bulle">
                <?php echo $post['Post']['title']; ?>
                <div class="date_bulle"> 
                    <?php echo $post['Post']['created']; ?>
                </div>
                <?php
                echo $this->Form->postLink(
                        $this->Html->image('delete2.png'), array('action' => 'delete', $post['Post']['id']), array('escape' => false, 'confirm' => 'Etes-vous sûr ?'));
                ?>
                <?php
                $modif = $this->Html->image('modify.png', array('alt' => 'Edit', 'title' => 'Editer'));
                ?>

                <?php echo $this->Html->link($modif, array('action' => 'Edit', $post['Post']['id']), array('escape' => false)); ?>
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