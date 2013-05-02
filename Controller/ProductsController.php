<?php

class ProductsController extends AppController {
    public $helpers = array('Paginator');
    public $components = array('Session');
    var $paginate =
            array(
        'limit' => 4,
        'order' => array('Products.id'=>'asc')
        );

    function index($categorie,$sousCategorie) {
        $this->loadModel('Category');
        $idCategory = $this->Category->find('all',
            array('conditions'=>  array('Category.name'=>$categorie)
         ));
        $this->loadModel('SubCategory');
        $idSubCategory = $this->SubCategory->find('all',
            array('conditions'=>  array('SubCategory.name'=>$sousCategorie)
         ));
        $listeProduits = $this->Product->find('all',array(
            'conditions'=>array('Product.category_id'=>$idCategory[0]['Category']['id'],'Product.sub_category_id'=>$idSubCategory[0]['SubCategory']['id'])
        ));
        $this->set('products', $listeProduits);
        
        $data=$this->paginate('Products.id');
        $this->set('data',$data);
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
                $idd = $idd-1;
                
                $dir = WWW_ROOT . 'img';
                $this->Session->setFlash($dir);
                $files = new File('C:/Users/Sonia/Desktop/testsite/' . $images[$idd]['Product']['picture']);
                //$this->Session->setFlash($files->name);
                $files->copy($dir, $overwrite = true);
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