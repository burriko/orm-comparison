<?php

namespace App\Eloquent\Repository;

use App\Eloquent\Company;

class CompanyRepository
{
	public function all()
	{
		return Company::with('employees')->get();
	}
}
