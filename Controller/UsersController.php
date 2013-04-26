<?php
Class UsersController extends AppController {

    function signup(){
        if($this->request->is('post')){
            $d = $this->request->data;
            $d['User']['id'] = null;
            if(!empty($d['User']['password'])){
                $d['User']['password'] = Security::hash($d['User']['password'],null,true);
            }                   

            if($this->User->save($d,true,array('username','password','mail','newsletter'))){
                $link = array('controller'=>'users','action'=>'activate',$this->User->id.'-'.md5($d['User']['password']));
                App::uses('CakeEmail','Network/Email');
                $email = new CakeEmail('gmail');
                $email->from('cyril.lespinasse@gmail.com')
                    ->to($d['User']['mail'])
                     ->subject('Test :: Inscription')   
                     ->emailFormat('html') 
                     ->template('signup')
                     ->viewVars(array('username'=>$d['User']['username'],'link' => $link))
                     ->send();     

                $this->Session->setFlash("Votre compte a bien été crée","notif");
            }else{
                $this->Session->setFlash("Merci de corriger vos erreurs","notif",array('type'=>'error'));

            }
        }

    }

    function login(){
        if($this->request->is('post')){
           if($this->Auth->login()){
                $this->Session->setFlash("Vous etes connecté","notif");
                $this->redirect('/');
            }else{
                $this->Session->setFlash("Identifiants incorrects","notif",array('type'=>'error'));

            }
        }   
    }

    function logout(){ 
        $this->Auth->logout();
        $this->redirect($this->referer());
    }

    function password(){
        if(!empty($this->request->params['named']['token'])){

            $token = $this->request->params['named']['token'];
            $token = explode('-',$token);
            $user = $this->User->find('first',array('conditions' => array('id' => $token[0],'MD5(User.password)' => $token[1])));
            if($user){
                $this->User->id = $user['User']['id'];
                $password = substr(md5(uniqid(rand(),true)),0,8);
                $this->User->saveField('password',Security::hash($password,null,true));
                $this->Session->setFlash("Votre mot de passe a bien été réinitialiser, voici notre nouveau mot de passe : $password","notif");
            }else{
                $this->Session->setFlash("Le lien n'est pas valide","notif",array('type'=>'error'));
            }
        }

        if($this->request->is('post')){
            $v = current($this->request->data);
            $user = $this->User->find('first',array('conditions'=>array('mail'=>$v['mail'])));
            if(empty($user)){
                $this->Session->setFlash("Aucun utilisateur ne correpond à ce mail","notif",array('type'=>'error'));
            }else{
                App::uses('CakeEmail','Network/Email');
                $link= array('controller'=>'users','action'=>'password','token'=>$user['User']['id'].'-'.md5($user['User']['password']));
                $email = new CakeEmail('smtp');
                $email->from('thibaud.michel64@gmail.com')
                    ->to($user['User']['mail'])
                     ->subject('Test :: Demande de mot de passe')   
                     ->emailFormat('html') 
                     ->template('mdp')
                     ->viewVars(array('username'=>$user['User']['username'],'link'=>$link))
                     ->send();    
           }
        }

    }
    
    /**NEWSLETTER **/
       
    //fonction d'envoi de la newsletter.
    public function EnvoiNewsletter($d){
       $this->set($d);
       App::uses('CakeEmail','Network/Email');
       $mail=new CakeEmail('gmail');
        $listemail = $this->User->find('list',array(
            'fields' => array('User.mail'),
            'conditions' => array('User.newsletter =' => 1)
            ));

       $mail->bcc($listemail)
               ->from('cyril.lespinasse@gmail.com')
               ->subject("Des news de La Récré d'Anacyrgui !")
               ->attachments(array('cartevisite.png' => 'img/cartevisite.png'))
               ->emailFormat('html')
               ->template('newsletter')
               ->viewVars($d);
       return $mail->send();
    }
    
     public $components = array('Session','Security');
    
     //fonction permettant l'affichage à la vue.
    function newsletter(){
        if($this->request->is('post')){    
            if($this->EnvoiNewsletter($this->request->data['NewsLetter'])){
                $this->Session->setFlash("Votre newsletter est bien transmise","ok");
                $this->request->data = array();
            }else{
                $this->Session->setFlash("Un problème est survenu,merci de réessayer","ko");
            }
        }   
    }
    
    
    public function edit(){
        $user_id = $this->Auth->user('id');
        if(!$user_id){
            $this->redirect('/');
            die();
        }
        
        $this->User->id = $user_id;
        if( $this->request->is('post')){
           $d = $this->request->data;
           $d['User']['id']= $user_id;
         
            $this->User->save($d,true,array('newsletter'),array('conditions'=>array('id'=>$d['User']['id'])));
            $this->Session->setFlash("enregistrement","ok");
           
       }
       
        
    }
}	
