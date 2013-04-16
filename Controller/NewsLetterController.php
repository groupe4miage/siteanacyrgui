<?php
class NewsLetterController extends AppController{
   
    public $components = array('Session','Security');
    
    function index(){
        if($this->request->is('post')){
            
             
        if($this->NewsLetter->send($this->request->data['NewsLetter'])){
            $this->Session->setFlash("Votre newsletter est bien transmise","ok");
            $this->request->data = array();
        }else{
            $this->Session->setFlash("Un problème est survenu,merci de réessayer","ko");
        }
    
        }
        
    }
}

?>
