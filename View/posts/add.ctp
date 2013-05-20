<?php $this->set('title_for_layout', 'Ajouter une actualité'); ?>
<h1 class="blogconseil imageconseil">&nbsp Ajouter une actualité</h1>
    <div class="connexion">
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title',array('label'=>'Votre titre :',"required"));
echo $this->Form->input('body',array('label'=>'Votre message :',"required"));
echo $this->Form->end('Sauvegarder');
?>
    </div>
