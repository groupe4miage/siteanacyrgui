<?php

class VisitorsBook extends AppModel {

    public $belongsTo = array(
            'User' => array(
                'fields'    => 'User.username'
            )
        );
}

?>
