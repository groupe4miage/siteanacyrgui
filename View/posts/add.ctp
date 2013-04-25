<h1 class="blogconseil imageconseil">&nbsp Ajouter une actualité</h1>
    <div class="connexion">
<?php
echo $this->Form->create('Post');
echo $this->Form->input('Votre titre:');
echo $this->Form->input('Votre message:', array('rows' => '3'));
echo $this->Form->end('Sauvegarder');
?>
    </div>
