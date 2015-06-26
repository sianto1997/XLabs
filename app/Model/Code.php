<?php

App::uses('AppModel', 'Model');

class Code extends AppModel {

    public $belongsTo = array(
        'Chapter'
    );
    public $hasMany = array(
        'CustomsDuty',
        'Child' => array(
            'className' => 'CodeClosure',
            'foreignKey' => 'parent_id'
        ),
        'Parent' => array(
            'className' => 'CodeClosure',
            'foreignKey' => 'child_id'
        )
    );

}