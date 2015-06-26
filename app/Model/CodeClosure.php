<?php

App::uses('AppModel', 'Model');

class CodeClosure extends AppModel {

    public $belongsTo = array(
        'Parent' => array(
            'className' => 'Code',
            'foreignKey' => 'parent_id'
        ),
        'Child' => array(
            'className' => 'Code',
            'foreignKey' => 'child_id'
        )
    );

}