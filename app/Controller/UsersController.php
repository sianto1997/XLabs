<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController{

public $components = array('Session');

	public function index(){
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	public function view($id = null){
		$this->User->id = $id;
		if (!$this->User->exists()){
			throw new NotFoundException(__('invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	public function add(){
		if ($this->request->is('post')){
			$this->User->create();
			if ($this->User->save($this->request->data)){
				$this->Session->setFlash(__('The user has been saved'));
				return $this->redirect(array('action' => 'add'));
			}
			$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
		}
	}

	public function edit($id = null){
		$this->User->id = $id;
		if(!$this->User->exists()){
			throw new NotFoundException(__('invalid user'));
		}
		if($this->request->is('post') || $this->request->is('put')){
			if($this->User->save($this->request->data)){
				$this->Session->setFlash(__('The user has been saved'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
		}
		else{
			$this->request->data = $this->User->read(null, $id);
			unset($this->request->data['User']['password']);
		}
	}

	public function delete($id = null){
		$this->request->allowMethod('post');
		$this->User->id = $id;
		if(!$this->User->exists()){
			throw new NotFoundException(__('Invalid user'));
		}
		if($this->User->delete()){
			$this->Session->setFlash(__('User deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}

	public function beforeFilter(){
		parent::beforeFilter();
		//Allow users to register and logout.
		$this->Auth->allow('logout', 'login');
	}

	public function login(){
		$this->set('pages', null);
		if($this->request->is('post')){
			if($this->Auth->login()){
				//redirect after login, now it goes 2 the homepage! edit routes make them work!!!
				return $this->redirect($this->Auth->redirectUrl('/dashboard'));
			}
			$this->Session->setFlash(__('invalid username or password. Please, try again.'));
		}
	}

	public function logout(){
		return $this->redirect($this->Auth->logout());
	}

}

?>