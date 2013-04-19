<table>
    <caption align="center"> Liste des produits</caption>

    <?php $i = 0; ?>
    <!-- C'est ici que nous bouclons sur le tableau $posts afin d'afficher
    les informations des posts -->
    <tr>
        <?php foreach ($posts as $post): ?>

            <td>
    <table>
     
            <tr align="center">
                <td >
                <?php
                if ($post['Product']['photo'] == '') {
                    echo $this->Html->image('noPhoto.png', array('alt' => 'noPhoto'));
                   
                } else {
                    echo $post['Product']['photo'];
                }
                $i++;
                ?>
                </td>
            </tr>
            <tr align="center">
                <td >
               <?php 
               echo $post['Product']['name'];
                ?>
                
               <?php 
               echo $post['Product']['unitprice'];
               echo "€";
               echo "    ";
               echo $this->Html->image('panier.png', array('alt' => 'panier'));
                ?>
                </td>
            </tr>
        
    </table>
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
