<?php $this->set('title_for_layout', 'La newsletter'); ?>
<h1 class="profil">Votre newsletter: </h1>
<div class="connexion newsletter">
<?php echo $this->Form->create('NewsLetter');?>

<?php echo $this->Form->input('titre',array('label'=>'Votre titre:',"required"));?>
</br>
<?php echo $this->Form->input('messages',array('label'=>'Votre message:',"type"=>"textarea","required"));?>
</br>
<?php echo $this->Form->end('Envoyer');?>
</div>