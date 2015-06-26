<?php

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

//User model, responsible for finding, saving and validating any user data!
class User extends AppModel{
	public $validate = array(
		'username' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A username is required'
			)
		),
		'password' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A password is required'
			)
		),
		'role' => array(
			'valid' => array(
				'rule' => array('inList', array('admin', 'member')),
				'message' => 'Please enter a valid role',
				'allowEmpty' => false
			)
		)
	);

	//Password hasher
	public function beforeSave($options = array()){
		if(isset($this->data[$this->alias]['password'])){
			$passwordHasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
		}
		return true;
	}	

}

?>