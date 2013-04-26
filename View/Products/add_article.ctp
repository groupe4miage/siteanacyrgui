<div class="connexion ajoutArticle">
    <h2 class="profil">Ajout d'un article</h2>
    <?php echo $this->Form->create('Product'); ?>
    <?php echo $this->Form->input('name', array('label'=>'Libellé: '));?>
    </br>
    <?php echo $this->Form->input('unitprice', array('label'=>'Prix: '));?>
    </br>
    <?php echo $this->Form->input('color_id', array('label'=>'Couleur: ','options'=>$listecouleurs));?>
    </br>
    <?php echo $this->Form->input('category_id', array('label'=>'Catégorie: ','options'=>$listecategories));?>
    </br>
    <?php echo $this->Form->input('subcategory_id', array('label'=>'Sous catégorie: ','options'=>$listesouscategories));?>
    </br>
    <?php echo $this->Form->input('picture', array('label'=>'Photo: ','type' => 'file')); ?>
    </br>
    <?php echo $this->Form->input('content', array('label'=>'Description: '));?>
    </br></br>
    <?php echo $this->Form->end('Ajouter'); ?>
</div>
<script>
    $(document).ready(function(){
        $('#ProductContent').parent().css({'height':'120px','padding-bottom':'10px'});
    });    
</script>