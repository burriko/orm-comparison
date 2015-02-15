<?php namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	public function company()
	{
		return $this->belongsTo('App\Eloquent\Company');
	}
}