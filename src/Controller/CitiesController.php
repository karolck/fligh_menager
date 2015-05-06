<?php
namespace App\Controller;
use App\Controller\AppController;

class CitiesController extends AppController{
	
	public function index(){
		$this->set('cities', $this->paginate($this->Cities));
		$this->set('_serialize', ['city']);
	}
	
	public function view($id=NULL){
		$city = $this->Cities->get($id, ['contain'=>[]]);
		$this->set('cities',$city);
		$this->set('_serialize', ['cities']);
		
	}
	
	public function add(){
		$city = $this->Cities->newEntity();
		
		if ($this->request->is('post')) {
			$city = $this->Cities->patchEntity($city, $this->request->data);
			
			if ($this->Cities->save($city)) {
				$this->Flash->success('City saved');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('City could not be saved. Please, try again.');
			}
		}
		
		$this->set(compact('city'));
		$this->set('_serialize', ['city']);
		
	}
	
	public function edit($id = NULL){
		$city = $this->Cities->get($id, ['constain'=>[]]);
		
		if ($this->request->is(['patch', 'post', 'put'])){
			$city = $this->Cities->patchEntity($city, $this->request->data);
			
			if ($this->Cities->save($city)){
				$this->Flash->success('City has been saved');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error ('City wos not be saved. Please try again');
			}
		}
		
		$this->set(compact('city'));
		$this->set('_serialize', ['city']);
	}
	
	public function delete($id=NULL){
		$this->request->allowMethod(['post', 'delete']);
		$city = $this->Cities->get($id);
		
		if ($this->Cities->delete($city)){
			$this->Flash->success('City wos deleted');
		}else {
			$this->Flash->error('City wos not deleted. Please try again');
		}
		
		return $this->redirect(['action' => 'index']);
		
	}
}