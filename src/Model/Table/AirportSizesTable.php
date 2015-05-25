<?php
namespace App\Model\Table;
use Cake\Validation\Validator;
use Cake\Orm\Table;
use Cake\Orm\Query;
use Cake\Orm\RulesChecker;

class AirportSizesTable extends Table{
	
	public function initialize(Array $config)
	{
		$this->table('airport_sizes');
		$this->displayField('iata');
		$this->primaryKey('id');
		//$this->addBehavior('Timestamp');
	}
	
//	public function validationDefault(Validator $validator){
//		$validator
//		->add('id', 'valid', ['rule' => 'numeric'])
//		->allowEmpty('id', 'create')
//		->allowEmpty('name')
//		->allowEmpty('countryid');
//
//		return $validator;
//	}
	
}