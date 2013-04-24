<h1 class="profil">Se connecter</h1>
<div class="connexion">
<?php echo $this->Form->create('User'); ?>
<?php echo $this->Form->input('username' ,array('label'=>"Login: ")); ?>
    </br>
<?php echo $this->Form->input('password' ,array('label'=>"Mot de passe: ")); ?>
    </br>
<?php echo $this->Html->link("Mot de passe oublié",array('action'=>'password','controller'=>'users')); ?>
    </br>
<?php echo $this->Form->end("Se connecter"); ?>
</div>
