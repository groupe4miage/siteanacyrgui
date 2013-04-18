
<table>
    <tr>
        <th>Liste des produits</th>

    </tr>

    <!-- C'est ici que nous bouclons sur le tableau $posts afin d'afficher
    les informations des posts -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td>
            <?php echo $post['Product']['name']; ?>
        </td>
        <td>
            <?php echo $post['Product']['name']; ?>
        </td>
        <td>
            <?php echo $post['Product']['name']; ?>
        </td>
        <td>
            <?php echo $post['Product']['name']; ?>
        </td>
  
    </tr>
    <?php endforeach; ?>
</table>