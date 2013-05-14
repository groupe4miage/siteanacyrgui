<div class="connexion ajoutArticle">
    <h1 class="blogconseil">Editer le post</h1>
       <?php echo $this->Form->create('Post', array('action' => 'edit')); ?>
      <?php  echo $this->Form->input('Titre: '); ?>
<br>
      <?php echo $this->Form->input('Description: ', array('rows' => '3')); ?>
<br>
       <?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
<br>
       <?php echo $this->Form->end('Sauvegarder le post'); ?>
</div>