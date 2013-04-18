<?php
class ProductsController extends AppController{
     
    //Ajout Laetita 18/04/13 affichage catalogue
    function index() {
        $this->set('posts', $this->Product->find('all'));
    }
    
    public function addArticle(){
      //Récupération de la liste des couleurs.
      $this->set('listecouleurs', $this->Product->Color->find('list'));
      //Récupération de la liste des categories.
      $this->set('listecategories', $this->Product->Category->find('list'));
      //Récupération de la liste des sous categories.
      $this->set('listesouscategories', $this->Product->Category->SubCategory->find('list'));
    }
}
?>