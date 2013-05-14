<?php

class VisitorsBooksController extends AppController {
    public $helpers = array('Html', 'Form','Paginator');
    public $components = array('Session');
    var $paginate =
              array(
              'limit' => 3,
              'order' => array(
              'VisitorsBook.created' => 'desc'
                )
              );  
    
    function index_admin() {
        if(AuthComponent::user('flag')=='1'){
        $this->set('Visitorsbooks', $this->VisitorsBook->find('all'));
        $data=$this->paginate('VisitorsBook.created');
        $this->set('data',$data);
        
        } else{
                   $this->redirect('/');
       }
    }
    
    
    function index_inscrit() {
        
       if(AuthComponent::user('id')){
        $this->set('visitorsbooks', $this->VisitorsBook->find('all'));
        
   
        if ($this->request->is('post')) {
            if ($this->VisitorsBook->save($this->request->data)) {
                $this->Session->setFlash('Votre commentaire a été sauvegardé.');
                $this->redirect(array('action' => 'index_inscrit'));
            } else {
                $this->Session->setFlash('Impossible d\'ajouter votre commentaire.');
            }
        }
        
        $data=$this->paginate('VisitorsBook.created');
        $this->set('data',$data);
        
       } else{
                   $this->redirect('/');
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
    
    
    public function delete($id) {
        
        if(AuthComponent::user('flag')=='1'){
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->VisitorsBook->delete($id)) {
            $this->Session->setFlash('Le Post avec l\'id ' . $id . ' a été supprimé.');
            $this->redirect(array('action' => 'index_admin'));
        }
    }else{
         $this->redirect('/');
    }
}
}
?>
