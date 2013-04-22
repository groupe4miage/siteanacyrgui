<?php
    class Product extends AppModel{
        public $actsAs = array('Media.Media');
        
         public $validate = array(
        'name' => array(
              array(
                        'rule' => 'isUnique',					
                        'message' => 'Cet article existe deja'
                )
        )
    );
        public $belongsTo = array(
            'Color' => array(
                'fields'    => 'Color.name'
            ),
            'Category' => array(
                'fields'    =>'Category.name'
            )
        );
    }
?>