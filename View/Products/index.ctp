<!-- C'est ici que nous bouclons sur le tableau $posts afin d'afficher
les informations des posts -->
<div class="table">

    <?php for($cpt = 0;$cpt<sizeof($data);$cpt++){ ?>
        <?php
            if($cpt == 0){
                echo '<div class="tr">';
             }else if($cpt % 4 == 0){
                  echo "</div>";
                  if($cpt<=sizeof($data)){
                      echo '<div class="tr">';
                  }
              }
              if($cpt == sizeof($data)){
                 echo '</div>';
              }
          ?>
        <div class="td">
            <div class="affichagephoto">
                <?php 
                if ($data[$cpt]['Product']['picture'] == '') {
                    echo $this->Html->image('noPhoto.png', array('alt' => 'noPhoto'));
                } else {
                    echo $this->Html->image($data[$cpt]['Product']['picture']);
                    echo "<br> <br>";
                }
                 ?>
            </div>
            <div class="affichagetexte">
                <?php 
                    echo $data[$cpt]['Product']['name'];
                    echo $data[$cpt]['Product']['unitprice'];
                    echo "€";
                    echo "    ";
                ?>
            </div>
        </div>
    <?php } ?> 
    <?php
// Montre les numéros de page
echo $this->Paginator->numbers();
//$this->Paginator->options(array('url' => $this->passedArgs));
// Montre les liens précédent et suivant
echo $this->Paginator->prev('  « Précédent ', null, null, array('class' => 'disabled'));
echo $this->Paginator->next(' Suivant »', null, null, array('class' => 'disabled'));

?>
</div>
