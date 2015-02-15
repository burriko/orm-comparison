<?php namespace App\Analogue;

use Analogue\ORM\EntityMap;

class EmployeeMap extends EntityMap
{
	public function company($entity)
	{
		return $this->belongsTo($entity, 'App\Analogue\Company');
	}
}