<?php namespace App\Analogue;

use Analogue\ORM\EntityMap;

class CompanyMap extends EntityMap
{
	public function employees($entity)
	{
		return $this->hasMany($entity, 'App\Analogue\Employee');
	}
}
