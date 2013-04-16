<h2>Se connecter</h2>
<?php echo $this->Form->create('User'); ?>
<?php echo $this->Form->input('username' ,array('label'=>"login: ")); ?>
<?php echo $this->Form->input('password' ,array('label'=>"Mot de passe ")); ?>
<?php echo $this->Html->link("Mot de passe oublié",array('action'=>'password','controller'=>'users')); ?>
<?php echo $this->Form->end("Se connecter"); ?>