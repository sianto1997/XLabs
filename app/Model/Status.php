<?php

App::uses('AppModel', 'Model');

class Status extends AppModel {

    public $hasMany = array(
        'Regulation'
    );

}