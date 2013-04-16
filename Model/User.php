<?php

Class User extends AppModel{  

public $validate = array(
		'username' => array(
			array(
				'rule' => 'alphanumeric',	
				'required' => true,
				'allowEmpty' => false,
				'message' => "Votre pseudo n'est pas valide"
				),
                    array(
				'rule' => 'isUnique',					
				'message' => 'Ce pseudo est deja pris'
                        )
		),
                'mail' => array(
                    array(
                        'rule' => 'email',
                        'required' => true,
                        'allowEmpty' => false,
                        'message' => "Votre email n'est pas valide"     
                        
                    ),
                    array(
                        'rule' => 'isUnique',
                        'message' =>'cet email est déja pris'  
                        )
                    ),
                    'password' => array(
                        array(
                            'rule' =>'notEmpty' ,
                            'message' =>'Vous devez entrer un mot de passe',
                            'allowEmpty' =>false
                        )           
                    )                                  
                    
                );   
    



}

