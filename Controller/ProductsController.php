<?php
class ProductsController extends AppController{
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