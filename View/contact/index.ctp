
<?php $this->set('title_for_layout','Me contacter'); ?>

<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?q=7+rue+saint+simon+blaye&amp;sll=45.124724,-0.663965&amp;hl=fr&amp;ie=UTF8&amp;hq=&amp;hnear=7+Rue+Saint-Simon,+33390+Blaye,+Gironde,+Aquitaine&amp;ll=45.124724,-0.663965&amp;spn=0.008781,0.01929&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.fr/maps?q=7+rue+saint+simon+blaye&amp;sll=45.124724,-0.663965&amp;hl=fr&amp;ie=UTF8&amp;hq=&amp;hnear=7+Rue+Saint-Simon,+33390+Blaye,+Gironde,+Aquitaine&amp;ll=45.124724,-0.663965&amp;spn=0.008781,0.01929&amp;t=m&amp;z=14&amp;source=embed" style="color:#0000FF;text-align:left">Agrandir le plan</a></small>
<?php echo $this->Form->create('Contact');?>
<?php echo $this->Form->input('name',array('label'=>'Votre nom :',"required"));?>
<?php echo $this->Form->input('email',array('label'=>'Votre email :',"type"=>"email","required"));?>
<?php echo $this->Form->input('messages',array('label'=>'Votre message :',"type"=>"textarea","required"));?>

<?php echo $this->Form->end('Envoyer');?>