<h1 class="profil">Inscription</h1>

<div class="connexion">
<?php echo $this->Form->create('User'); ?>
<?php echo $this->Form->input('username' ,array('label'=>"Login: ")); ?>
    </br>
<?php echo $this->Form->input('mail' ,array('label'=>"Email: ")); ?>
    </br>
<?php echo $this->Form->input('password' ,array('label'=>"Mot de passe :")); ?>
    </br>
<?php echo $this->Form->end("S'enregister"); ?>

</div>