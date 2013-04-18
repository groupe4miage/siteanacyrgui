<?php echo $this->Form->create('NewsLetter');?>

<?php echo $this->Form->input('titre',array('label'=>'Votre titre :',"required"));?>

<?php echo $this->Form->input('messages',array('label'=>'Votre message :',"type"=>"textarea","required"));?>

<?php echo $this->Form->end('Envoyer');?>