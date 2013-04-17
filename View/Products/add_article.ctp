<h2>Ajout d'un article</h2>
<?php echo $this->Form->create('AjouterArticleController'); ?>
<?php echo $this->Form->input('libelle', array('label'=>'nom de l\'article'));?>
<?php echo $this->Form->input('desciption', array('label'=>'Description de l\'article'));?>
<?php echo $this->Form->input('couleur', array('label'=>'couleur','options'=>$listecouleurs));?>
<?php echo $this->Form->input('categorie', array('label'=>'catégorie','options'=>$listecategories));?>
<?php echo $this->Form->input('souscategorie', array('label'=>'sous catégorie','options'=>$listesouscategories));?>
<?php echo $this->Form->end('Ajout'); ?>