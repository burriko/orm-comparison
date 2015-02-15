<?php namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	public function employees()
	{
		return $this->hasMany('App\Eloquent\Employee');
	}
}
