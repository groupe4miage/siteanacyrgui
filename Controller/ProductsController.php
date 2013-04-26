<?php

class ProductsController extends AppController {

    //Ajout Laetita 18/04/13 affichage catalogue
    function index() {
        $this->set('products', $this->Product->find('all'));
    }

    function index_admin() {
        $this->set('products', $this->Product->find('all'));
    }

    public function add_article() {

        //Récupération de la liste des couleurs.
        $this->set('listecouleurs', $this->Product->Color->find('list'));
        //Récupération de la liste des categories.
        $this->set('listecategories', $this->Product->Category->find('list'));
        //Récupération de la liste des sous categories.
        $this->set('listesouscategories', $this->Product->Category->SubCategory->find('list'));

        if ($this->request->is('post')) {
            
            
           // if ($this->Product->save($this->request->data)) {
                
                $this->Product->save($this->request->data);
                $id = $this->Product->find('all', array(
                'fields' => array('Product.id'),
                'order'=> array('Product.id'=>'desc')
                ));
                
                $idd = $this->Product->find('count');
                
                //$this->Session->setFlash($idd);
                
                $images = $this->Product->find('all', array(
                'fields' => array('Product.picture'),
                'condition' => array('Product.id' => $idd)
                ));
                
                
                $dir = WWW_ROOT . 'img/';
                $files = new File('C:/Users/Sonia/Desktop/testsite/' . $images[$idd]['Product']['picture']);
                $this->Session->setFlash($files->name);
                $files->copy($dir->path.DS.$files->name);
                //copy('img/'.$image, 'C:\Users\Sonia\Desktop\testsite'.$image);    
                //$this->Session->setFlash($this->post('picture'));
                //$this->Session->setFlash('Votre produit a été sauvegardé.');
                $this->redirect(array('action' => 'add_article'));
           // } else {
             //   $this->Session->setFlash('Impossible d\'ajouter ce produit.');
            //}
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        
        $image = $this->Product->find('all', array(
            'fields' => array('Product.picture'),
            'condition' => array('Product.id' => $id)
        ));

        if ($this->Product->delete($id)) {

            $dir = 'img/';
            $files = new File(WWW_ROOT . $dir . $image[0]['Product']['picture']);
            $files->delete();


            $this->Session->setFlash('Le produit avec l\'id ' . $id . ' a été supprimé.');
            $this->redirect(array('action' => 'index_admin'));
        }
    }

}

?>