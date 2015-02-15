<?php namespace App\Analogue;

use Analogue\ORM\Entity;

class Employee extends Entity
{
	public function __construct($name, $job_title, $phone, $email)
	{
		$this->name = $name;
		$this->job_title = $job_title;
		$this->phone = $phone;
		$this->email = $email;
	}
}