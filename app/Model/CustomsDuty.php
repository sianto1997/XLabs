<?php

App::uses('AppModel', 'Model');

class CustomsDuty extends AppModel {

    public $belongsTo = array(
        'Code',
        'Country',
        'Regulation',
    );

}