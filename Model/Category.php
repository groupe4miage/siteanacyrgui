<?php
    class Category extends AppModel{
        public $hasMany = array('Product');
         public $belongsTo = array(
            'SubCategory' => array(
                'fields'    => 'SubCategory.name'
            )
        );
    }
?>
