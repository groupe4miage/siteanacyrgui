<h1 class="profil">Mot de passe oublié: </h1>
<?php $this->set('title_for_layout',"Mot de passe oublié"); ?>
<div class="connexion">
<?php echo $this->Form->create('User'); ?>
<?php echo $this->Form->input('mail',array('label'=>"Votre email: ")); ?>
</br>
<?php echo $this->Form->end("Envoyer"); ?>
</div>
