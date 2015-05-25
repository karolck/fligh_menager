<?php
namespace App\Model\Table;
use Cake\Validation\Validator;
use Cake\Orm\Table;
use Cake\Orm\Query;
use Cake\Orm\RulesChecker;

class AirportTypesTable extends Table{
	
	public function initialize(Array $config)
	{
		$this->table('airport_types');
		$this->displayField('name');
		$this->primaryKey('id');
	}

	
}