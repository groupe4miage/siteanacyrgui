<h1>Laissez-vous guider par Claudine</h1>
<table>
    <tr>
        <th>Titre</th>
        <th>Crée</th>
    </tr>

    <!-- C'est ici que nous bouclons sur le tableau $posts afin d'afficher
    les informations des posts -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td>
            <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td>
            <?php echo $post['Post']['created']; ?>
        </td>
       
    </tr>
    <?php endforeach; ?>
</table>