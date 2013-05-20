<?php $this->set('title_for_layout', 'Inscription'); ?>
<h1 class="blogconseil">Inscription</h1>

<div class="connexion">
<?php echo $this->Form->create('User'); ?>
<?php echo $this->Form->input('username' ,array('label'=>"Identifiant: ")); ?>
    </br>
<?php echo $this->Form->input('mail' ,array('label'=>"Email: ")); ?>
    </br>
<?php echo $this->Form->input('password' ,array('label'=>"Mot de passe :")); ?>
    </br>
    <?php echo $this->Form->input('newsletter', array('type' => 'checkbox','label'=>'S\'abonner à la newsletter' )); ?>
    </br>
    En validant l'inscription vous validez les
   <a href="<?php echo $this->webroot; ?>files/Modele_CGU.pdf">conditions générales du site</a>
    </br></br>

<?php echo $this->Form->end("S'enregister"); ?>

</div>