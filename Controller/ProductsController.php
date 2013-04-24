<?php
class ProductsController extends AppController{
     
    //Ajout Laetita 18/04/13 affichage catalogue
    function index() {
        $this->set('products', $this->Product->find('all'));
    }
    
    
    
    public function add_article(){
        
      //Récupération de la liste des couleurs.
      $this->set('listecouleurs', $this->Product->Color->find('list'));
      //Récupération de la liste des categories.
      $this->set('listecategories', $this->Product->Category->find('list'));
      //Récupération de la liste des sous categories.
      $this->set('listesouscategories', $this->Product->Category->SubCategory->find('list'));
      
      //******* On renomme l'image de manière aléatoire pour éviter un conflit dans le dossier (2 fois le même nom par exemple
    $dir = 'img/';
   // $ext = strtolower( pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION) );
   // $file=uniqid().'.'.$ext;
    $file='plaisir des yeux.png';
 
 //**** on bouge l'image
   

    //move_uploaded_file($_FILES['picture']['tmp_name'], $dir);
    //debug($_FILES['picture']['tmp_name']);
      
      //$ext = $_FILES['photo']['name'];
      //debug($ext);
      
      //$ext = strtolower( pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION) );
      //$file=uniqid().'.'.$ext; 
      //debug($_FILES['file']['name']);

      if ($this->request->is('post')) {
            if ($this->Product->save($this->request->data)) {
                $this->Session->setFlash('Votre produit a été sauvegardé.');
                $this->redirect(array('action' => 'add_article'));
                
            } else {
                $this->Session->setFlash('Impossible d\'ajouter ce produit.');
            }
        }
    }
}
?>