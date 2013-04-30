<?php
    class Product extends AppModel{
                
         public $validate = array(
            'id' => array(
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
            ),
            'SubCategory' => array(
                'fields'    =>'SubCategory.name'
            )
        );
    }
?>