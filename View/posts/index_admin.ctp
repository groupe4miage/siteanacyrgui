<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h1 class="blogconseil imageconseil">&nbsp Retrouver vos derniers articles...</h1>
<div class="tableau">
<table class="tableau_ajout">
    
    <tr>
        <th>Id</th>
        <th>Titre</th>
        <th>Crée</th>
        <th>Date</th>
    </tr>

    <!-- C'est ici que nous bouclons sur le tableau $posts afin d'afficher
    les informations des posts -->

    <?php foreach ($data as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Form->postLink(
                'Supprimer',
                array('action' => 'delete', $post['Post']['id']),
                    
                array('confirm' => 'Etes-vous sûr ?'));
            ?>
            <?php echo $this->Html->link('Modifier', array('action' => 'Edit', $post['Post']['id'])); ?>
        </td>
        <td>
            <?php echo $post['Post']['created']; ?>
        </td>
       
    </tr>
    <?php endforeach; ?>
     <tr>
           
     <?php echo $this->Html->link($this->Html->image("add.png", array("alt" => "Ajouter un post")),array('controller' => 'posts', 'action' => 'add'),array('escape'=>FALSE)); ?>
         </br>
     </tr>
</table>


<?php
// Montre les numéros de page
echo $this->Paginator->numbers();

// Montre les liens précédent et suivant
echo $this->Paginator->prev('  « Précédent ', null, null, array('class' => 'disabled'));
echo $this->Paginator->next(' Suivant »', null, null, array('class' => 'disabled'));

?>

</div>
