<?php namespace App\Analogue;

use Analogue\ORM\Entity;
use App\Analogue\Employee;
use Illuminate\Database\Eloquent\Collection;

class Company extends Entity
{
	public function __construct($name, $business)
	{
		$this->name = $name;
		$this->business = $business;

		$this->employees = new Collection;
	}

	public function addEmployee(Employee $employee)
	{
		$this->employees->add($employee);
	}
}