<?php
    class Product extends AppModel{
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