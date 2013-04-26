<h1 class="profil">Edition</h1>

<div class="connexion">
<?php echo $this->Form->create('User'); ?>
 
   
    <?php if(AuthComponent::user('newsletter')=='0' || AuthComponent::user('newsletter')=='2'): ?> 
                     <?php echo $this->Form->input('newsletter', array('type' => 'checkbox','label'=>'S abonner à la newsletter','value'=>'1' )); ?>
                     <?php else: ?>
                     <?php echo $this->Form->input('newsletter', array('type' => 'checkbox','label'=>'Se désinscrire à la newsletter','value' => '2' )); ?>
                   <?php endif; ?> 
    </br>

<?php echo $this->Form->end("S'enregister"); ?>

</div>