<?php
    class Color extends AppModel{
        public $hasMany = array('Product');
        public $displaysField = 'name';
    }
?>
