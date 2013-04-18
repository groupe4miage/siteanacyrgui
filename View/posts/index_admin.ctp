<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Titre</th>
        <th>Crée</th>
    </tr>

    <!-- C'est ici que nous bouclons sur le tableau $posts afin d'afficher
    les informations des posts -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $post['Post']['id']),
                array('confirm' => 'Etes-vous sûr ?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?>
        </td>
        <td>
            <?php echo $post['Post']['created']; ?>
        </td>
       
    </tr>
    <?php endforeach; ?>
     <tr>
            <?php echo $this->Html->link('Ajouter un post', array('controller' => 'posts', 'action' => 'add')); ?>
     </tr>
</table>