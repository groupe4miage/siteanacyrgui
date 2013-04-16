<?php
class NewsLetter extends AppModel{
    
    public $useTable = false;
    public $validate = array(
            
            'NewsLetter' => array(
                'rule' => 'notEmpty', 
                'required'=>true, 
                'message' => 'Vous devez entrer le contenu de la newsletter'
                )
        );
    
    public function send($d){
        $this->set($d);
        //if($this->validates()){
        App::uses('CakeEmail','Network/Email');
        $mail=new CakeEmail('gmail');
        $mail->bcc(array('laetitia.errecaret@gmail.com','cyril.lespinasse@gmail.com'))
                ->from('cyril.lespinasse@gmail.com')
                ->subject("Des news de La Récré d'Anacyrgui !")
                ->attachments(array('banniere.png' => 'img/banniere.png'))
                ->emailFormat('html')
                ->template('newsletter')
                ->viewVars($d);
        return $mail->send();
        //else{
            //echo "erreur";
            //return false;
   // }
   }
    
}

?>
