<?php

App::uses('AppModel', 'Model');

class Chapter extends AppModel {

    public $belongsTo = array(
        'Department'
    );
    public $hasMany = array(
        'Code'
    );

}