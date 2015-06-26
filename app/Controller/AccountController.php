<?php

App::uses('AppController', 'Controller');

class AccountController extends AppController {

	function beforeFilter() {
    	parent::beforeFilter();
        $this->layout = 'sellpanel';
  	}
	public function index() {
		
	}
}