<?php

App::uses('AppModel', 'Model');

class Regulation extends AppModel {

    public $hasMany = array(
        'CustomsDuty'
    );

    public $belongsTo = array(
        'Status'
    );

}