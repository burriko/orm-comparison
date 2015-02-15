<?php

namespace App\Analogue\Repository;

use Analogue\ORM\Repository;
use App\Analogue\Company;

class CompanyRepository extends Repository
{
	public function all()
	{
		return $this->with('employees')->get();
	}
}
