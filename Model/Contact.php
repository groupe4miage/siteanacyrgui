<?php
class Contact extends AppModel{
    
    public $useTable = false;
    public $validate = array(
            'name' => array(
                'rule' => 'notEmpty', 
                'required'=>true, 
                'message' => 'Vous devez entrer votre nom'
                ),
            'email' => array(
                'rule' => 'email', 
                'required'=>true, 
                'message' => 'Vous devez entrer un email valide'
                ),
            'messages' => array(
                'rule' => 'notEmpty', 
                'required'=>true, 
                'message' => 'Vous devez entrer un message'
                )
        );
    
    public function send($d){
        $this->set($d);
        if($this->validates()){
        App::uses('CakeEmail','Network/Email');
        $mail=new CakeEmail('gmail');
        $mail->to('cyril.lespinasse@gmail.com')
                ->from($d['email'])
                ->subject('On cherche à vous joindre')
                ->emailFormat('html')
                ->template('contact')->viewVars($d);
        return $mail->send();
        }else
            return false;
    }
    /*var $name = 'Contact';
    var $useTable=false;
    var $_schema= array(
       "nom"=>array(
           "type"=>"string",
           "length"=>30
       ),
        "email"=>array(
           "type"=>"string",
           "length"=>50,
        ),
        "message"=>array(
            "type"=> "text"
            )
    );*/
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
