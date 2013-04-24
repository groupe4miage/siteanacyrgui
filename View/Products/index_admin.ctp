

<caption> Liste des produits</caption>


<!-- C'est ici que nous bouclons sur le tableau $posts afin d'afficher
les informations des posts -->

<?php foreach ($products as $post): ?>
    <?php

    if (($post['Product']['category_id'] == 2)) {
        if ($post['Product']['picture'] == '') {
            echo $this->Html->image('noPhoto.png', array('alt' => 'noPhoto'));
        } else {

            echo $this->Html->image($post['Product']['picture']);
            echo "<br> <br>";
        }

        echo $post['Product']['name'];


        echo $post['Product']['unitprice'];
        echo "€";
        echo "    ";
        echo $this->Form->postLink(
              $this->Html->image('panier.png', array('alt' => ('panier'))),
                array('escape' => false),
                array('action' => 'delete', $post['Product']['id']),
                array('confirm' => 'Etes-vous sûr ?'));
        //echo $this->Html->image('panier.png', array('alt' => 'panier'));
    }
endforeach;
?>
    
