<?php $this->set('title_for_layout', 'Les produits'); ?>
<div class="table">
     <?php 
        if (sizeof($data) == 0){
    ?>
            <div class="erreur_produit contenu_ecriture"><center>Il y a aucun produit de disponible dans cette catégorie.</center></div>
   <?php }else{
        for ($cpt = 0; $cpt < sizeof($data); $cpt++) { ?>
        <?php
        if ($cpt == 0) {
            echo '<div class="tr">';
        } else if ($cpt % 4 == 0) {
            echo "</div>";
            if ($cpt <= sizeof($data)) {
                echo '<div class="tr">';
            }
        }
        if ($cpt == sizeof($data)) {
            echo '</div>';
        }
        ?>
        <div class="td">
            <div class="produit">
                <div class="produit_titre contenu_ecriture">
                    <center>
                        <?php echo $data[$cpt]['Product']['name'];?>
                    </center>
                </div>
                <div class="produit_photo">
                    <center>
                        <?php if ($data[$cpt]['Product']['picture'] == '') {
                                echo $this->Html->image('noPhoto.png', array('alt' => 'noPhoto'));
                                echo "<br> <br>";
                            } else {
                                echo $this->Html->image($data[$cpt]['Product']['picture']);
                                echo "<br> <br>";
                            }
                        ?>
                    </center>
                </div>
                <div class="produit_prix contenu_ecriture">
                    <center>
                        <?php echo $data[$cpt]['Product']['unitprice'];echo "€";?>
                        &nbsp;&nbsp;
                        <?php echo $this->Form->postLink(
                        $this->Html->image('delete.png'), array('action' => 'delete', $data[$cpt]['Product']['id'],$data[$cpt]['Product']['category_id'],$data[$cpt]['Product']['sub_category_id']), array('escape' => false, 'confirm' => 'Etes-vous sûr ?'));
                        ?>
                    </center>
                </div>
            </div>
        </div>
   <?php } }?> 
</div>
 <div class="contenu_ecriture">
     <center>
        <?php
            if (sizeof($data) != 0){
            // Montre les numéros de page
            echo $this->Paginator->numbers();
            // Montre les liens précédent et suivant
            echo $this->Paginator->prev('  « Précédent ', null, null, array('class' => 'disabled'));
            echo $this->Paginator->next(' Suivant »', null, null, array('class' => 'disabled'));
            }
        ?>
     </center>
 </div>
</div>