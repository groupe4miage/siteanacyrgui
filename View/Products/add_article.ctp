<h2>Ajout d'un article</h2>
<?php echo $this->Form->create('Product'); ?>
<?php echo $this->Form->input('name', array('label'=>'Nom de l\'article'));?>
<?php echo $this->Form->input('unitprice', array('label'=>'Prix de l\'article'));?>
<?php echo $this->Form->input('content', array('label'=>'Description de l\'article'));?>
<?php echo $this->Form->input('color_id', array('label'=>'Couleur','options'=>$listecouleurs));?>
<?php echo $this->Form->input('category_id', array('label'=>'Catégorie','options'=>$listecategories));?>
<?php echo $this->Form->input('subcategory_id', array('label'=>'Sous catégorie','options'=>$listesouscategories));?>
<?php echo $this->Form->create('photo', array('label'=>'photo','type' => 'file')); ?>
<?php echo $this->Form->file('file');?><?php echo $this->Form->end('Ajout'); ?>