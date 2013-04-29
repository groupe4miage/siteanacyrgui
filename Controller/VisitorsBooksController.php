<?php

class VisitorsBooksController extends AppController {
    public $helpers = array('Html', 'Form','Paginator');
    public $components = array('Session');
    var $paginate =
              array(
              'limit' => 4,
              'order' => array(
              'VisitorsBook.created' => 'desc'
                )
              );  
    
    function index_admin() {
        $this->set('Visitorsbooks', $this->VisitorsBook->find('all'));
        $data=$this->paginate('VisitorsBook.created');
        $this->set('data',$data);
    }
    
    
    function index_inscrit() {
        $this->set('visitorsbooks', $this->VisitorsBook->find('all'));
        $data=$this->paginate('VisitorsBook.created');
        $this->set('data',$data);
        if ($this->request->is('post')) {
            if ($this->VisitorsBook->save($this->request->data)) {
                $this->Session->setFlash('Votre commentaire a été sauvegardé.');
                $this->redirect(array('action' => 'index_inscrit'));
            } else {
                $this->Session->setFlash('Impossible d\'ajouter votre commentaire.');
            }
        }
    }
    
    function index_noninscrit() {
        $this->set('visitorsbooks', $this->VisitorsBook->find('all'));
        $data=$this->paginate('VisitorsBook.created');
        $this->set('data',$data);
    }
    
    public function view($id) {
        $this->VisitorsBook->id = $id;
        $this->set('visitorsbooks', $this->VisitorsBook->read());
        
    }
    
     public function add() {
         debug('coucou');
        if ($this->request->is('post')) {
            if ($this->VisitorsBook->save($this->request->data)) {
                $this->Session->setFlash('Votre commentaire a été sauvegardé.');
                $this->redirect(array('action' => 'index_inscrit'));
            } else {
                $this->Session->setFlash('Impossible d\'ajouter votre commentaire.');
            }
        }
    }
    
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->VisitorsBook->delete($id)) {
            $this->Session->setFlash('Le Post avec l\'id ' . $id . ' a été supprimé.');
            $this->redirect(array('action' => 'index_inscrit'));
        }
    }
}
?>
