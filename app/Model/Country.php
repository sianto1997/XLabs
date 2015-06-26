<?php

App::uses('AppModel', 'Model');

class Country extends AppModel {

    public $hasMany = array(
        'CustomsDuty'
    );

}
