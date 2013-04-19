<table>
    <caption align="center"> Liste des produits</caption>

    <?php $i = 0; ?>
    <!-- C'est ici que nous bouclons sur le tableau $posts afin d'afficher
    les informations des posts -->
    <tr>
        <?php foreach ($posts as $post): ?>

            <td>
                <?php
                echo $post['Product']['name'];
                $i++;
                ?>
            </td>
            <?php
            if ($i == 4) {
                ?>
            </tr><tr> 
                <?php
                $i = 0;
            }
            ?>
        <?php endforeach; ?>
    </tr>
</table>
