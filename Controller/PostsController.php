<?php

class PostsController extends AppController {
    public $helpers = array('Html', 'Form','Paginator');
    public $components = array('Session');
    var $paginate =
              array(
              'limit' => 4,
              'order' => array(
              'Post.created' => 'desc'
                )
              );  
    
    
    function index_admin() {
        $this->set('posts', $this->Post->find('all'));
        $data=$this->paginate('Post.created');
        $this->set('data',$data);
    }
    
    function index_users() {
        $this->set('posts', $this->Post->find('all'));
        $data=$this->paginate('Post.created');
        $this->set('data',$data);
    }
    
    public function view($id) {
        $this->Post->id = $id;
        $this->set('post', $this->Post->read());
        
    }
    
     public function add() {
        if ($this->request->is('post')) {
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Votre post a été sauvegardé.');
                $this->redirect(array('action' => 'index_admin'));
            } else {
                $this->Session->setFlash('Impossible d\'ajouter votre post.');
            }
        }
    }
    public function edit($id = null) {
    $this->Post->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Post->read();
    } else {
        if ($this->Post->save($this->request->data)) {
            $this->Session->setFlash('Votre post a été mis à jour.');
            $this->redirect(array('action' => 'index_admin'));
        } else {
            $this->Session->setFlash('Impossible de mettre à jour votre post.');
            }
        }
    }
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Post->delete($id)) {
            $this->Session->setFlash('Le Post avec l\'id ' . $id . ' a été supprimé.');
            $this->redirect(array('action' => 'index_admin'));
        }
    }
}
?>
