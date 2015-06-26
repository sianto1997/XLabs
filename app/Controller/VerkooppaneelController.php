<?php

App::uses('AppController', 'Controller');

class VerkooppaneelController extends AppController {

	function beforeFilter() {
    	parent::beforeFilter();
        $this->layout = 'sellpanel';
  	}

	public function index() {
		
	}
	public function account(){

	}
	public function summary(){
		function beforeFilter() {
		parent::beforeFilter();
	    		$this->layout = 'sellpanel';
		}
	}
}