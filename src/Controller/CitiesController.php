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
		$city = $this->City->newEntity();
		
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
	
	public function edit(){
		
	}
	
	public function delete(){
		
	}
}