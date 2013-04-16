<?php
class ContactController extends AppController{
    /*var $name ="contact";
    var $uses = array("contact");
    var $components = array("Email");*/
    
    public $components = array('Session','Security');
    
    function index(){
        if($this->request->is('post')){
            
             
        if($this->Contact->send($this->request->data['Contact'])){
            $this->Session->setFlash("Votre mail nous est bien parvenu","ok");
            $this->request->data = array();
        }else{
            $this->Session->setFlash("Un problème est survenu lors de l'envoi de votre email, merci de réessayer","ko");
        }
    /*if(isset($this->data)){   
        $this->Email->to="cyril.lespinasse@gmail.com";
        $this->Email->subject = "Formulaire de contact";
        $this->Email->from = $this->data["contact"]["email"];
        $this->Email->replyTo = $this->data["Contact"]["email"];
        $this->Email->send($this->data["Contact"]["message"]);
        $this->Session->setFlash("Votre message est bien parti");
        }*/
        }
        
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
