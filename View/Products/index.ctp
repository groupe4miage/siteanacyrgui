<!-- C'est ici que nous bouclons sur le tableau $posts afin d'afficher
les informations des posts -->
<div class="table">
    <?php for($cpt = 0;$cpt<sizeof($products);$cpt++){ ?>
        <?php
            if($cpt == 0){
                echo '<div class="tr">';
             }else if($cpt % 4 == 0){
                  echo "</div>";
                  if($cpt<=sizeof($products)){
                      echo '<div class="tr">';
                  }
              }
              if($cpt == sizeof($products)){
                 echo '</div>';
              }
          ?>
        <div class="td">
            <div class="affichagephoto">
                <?php 
                if ($products[$cpt]['Product']['picture'] == '') {
                    echo $this->Html->image('noPhoto.png', array('alt' => 'noPhoto'));
                } else {
                    echo $this->Html->image($products[$cpt]['Product']['picture']);
                    echo "<br> <br>";
                }
                 ?>
            </div>
            <div class="affichagetexte">
                <?php 
                    echo $products[$cpt]['Product']['name'];
                    echo $products[$cpt]['Product']['unitprice'];
                    echo "€";
                    echo "    ";
                ?>
            </div>
        </div>
    <?php } ?> 
</div>
</div>
